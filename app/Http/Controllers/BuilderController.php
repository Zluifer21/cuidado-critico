<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Collection;
use InfyOm\GeneratorBuilder\Requests\BuilderGenerateRequest;

class BuilderController extends Controller
{
    public function generate(BuilderGenerateRequest $request)
    {
        $data = $request->all();

        // Validate fields
        if (isset($data['fields'])) {
            $this->validateFields($data['fields']);

            // prepare foreign key
            $isAnyForeignKey = collect($data['fields'])->filter(function ($field) {
                return $field['isForeign'] == true;
            });
            if (count($isAnyForeignKey)) {
                $data['fields'] = $this->prepareForeignKeyData($data['fields']);
            }
        }

        // prepare relationship

        if (isset($data['fields']) && !empty($data['relations'])) {
            $data = $this->prepareRelationshipData($data);
        }
       // dd($data['commandType']);
       //
       // Artisan::call('infyom:api');
       // dd(json_encode($data));
      Artisan::call('infyom:api', [
            'model'         => $data['modelName'],
            '--jsonFromGUI' => json_encode($data),
        ]);


        return Response::json('Files created successfully');
    }
    private function validateFields($fields)
    {
        $fieldsGroupBy = collect($fields)->groupBy(function ($item) {
            return strtolower($item['name']);
        });

        $duplicateFields = $fieldsGroupBy->filter(function (Collection $groups) {
            return $groups->count() > 1;
        });
        if (count($duplicateFields)) {
            throw new \Exception('Duplicate fields are not allowed');
        }

        return true;
    }

    private function prepareRelationshipData($inputData)
    {
        foreach ($inputData['relations'] as $inputRelation) {
            $relationType = $inputRelation['relationType'];
            $relation = $relationType;
            if (isset($inputRelation['foreignModel'])) {
                $relation .= ','.$inputRelation['foreignModel'];
            }
            if ($relationType == 'mtm') {
                if (isset($inputRelation['foreignTable'])) {
                    $relation .= ','.$inputRelation['foreignTable'];
                } else {
                    $relation .= ',';
                }
            }
            if (isset($inputRelation['foreignKey'])) {
                $relation .= ','.$inputRelation['foreignKey'];
            }
            if (isset($inputRelation['localKey'])) {
                $relation .= ','.$inputRelation['localKey'];
            }

            $inputData['fields'][] = [
                'type'     => 'relation',
                'relation' => $relation,
            ];
        }
        unset($inputData['relations']);

        return $inputData;
    }

    private function prepareForeignKeyData($fields)
    {
        $updatedFields = [];
        foreach ($fields as $field) {
            if ($field['isForeign'] == true) {
                if (empty($field['foreignTable'])) {
                    throw new \Exception('Foreign table required');
                }
                $inputs = explode(',', $field['foreignTable']);
                $foreignTableName = array_shift($inputs);
                // prepare dbType
                $dbType = $field['dbType'];
                $dbType .= ':unsigned:foreign';
                $dbType .= ','.$foreignTableName;
                if (!empty($inputs)) {
                    $dbType .= ','.$inputs['0'];
                } else {
                    $dbType .= ',id';
                }
                $field['dbType'] = $dbType;
            }
            $updatedFields[] = $field;
        }

        return $updatedFields;
    }
}
