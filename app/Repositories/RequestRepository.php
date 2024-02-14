<?php

namespace App\Repositories;

use App\Models\Request;
use App\Repositories\BaseRepository;

class RequestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'request_type_id',
        'employee_id',
        'date',
        'time',
        'long',
        'obvservations',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Request::class;
    }

    public function getAll()
    {
        $idsDepartmentsWhereUserIsLead = auth()->user()->employee->department()->wherePivot('role','lead')->pluck('departments.id');

        if(count($idsDepartmentsWhereUserIsLead)>0)
        {
            return $this->model->whereHas('employee',function($q) use ($idsDepartmentsWhereUserIsLead){
                $q->whereHas('department',function($q) use ($idsDepartmentsWhereUserIsLead){
                    $q->whereIn('department_id',$idsDepartmentsWhereUserIsLead);
                });
            })->with('employee','medias','type')->get();
        }else{
            return $this->model->where('employee_id',auth()->user()->id)->with('employee','medias','type')->get();
        }

    }

}
