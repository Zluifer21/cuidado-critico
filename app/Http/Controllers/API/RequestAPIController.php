<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRequestAPIRequest;
use App\Http\Requests\API\UpdateRequestAPIRequest;
use App\Models\Request as RequestModel;
use App\Models\RequestType;
use App\Repositories\RequestRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;

/**
 * Class RequestAPIController
 */
class RequestAPIController extends AppBaseController
{
    private RequestRepository $requestRepository;

    public function __construct(RequestRepository $requestRepo)
    {
        $this->requestRepository = $requestRepo;
    }

    /**
     * Display a listing of the Requests.
     * GET|HEAD /requests
     */
    public function index(Request $request): JsonResponse
    {
        $requests = $this->requestRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit'),
            ['*'],
            ['employee','type','medias']
        );

        return $this->sendResponse($requests->toArray(), 'Requests retrieved successfully');
    }

    /**
     * Store a newly created Request in storage.
     * POST /requests
     */
    public function store(CreateRequestAPIRequest $request): JsonResponse
    {
        $input = $request->all();
        $input['employee_id'] = auth()->user()->employee->id;
        $new_request = $this->requestRepository->create($input);
        foreach ($input['files'] as $file) {
           $path=$file->store('public/'.auth()->user()->employee->dni.'/requests');
              $new_request->medias()->create([
                'url'=>$path,
                'name'=>$file->getClientOriginalName()
              ]);
        }
        $new_request->load('medias');
        return $this->sendResponse($new_request->toArray(), 'Request saved successfully');
    }

    /**
     * Display the specified Request.
     * GET|HEAD /requests/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var RequestModel $request */
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            return $this->sendError('Request not found');
        }

        return $this->sendResponse($request->toArray(), 'Request retrieved successfully');
    }

    /**
     * Update the specified Request in storage.
     * PUT/PATCH /requests/{id}
     */
    public function update($id, UpdateRequestAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Request $request */
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            return $this->sendError('Request not found');
        }

        $request = $this->requestRepository->update($input, $id);

        return $this->sendResponse($request->toArray(), 'Request updated successfully');
    }

    /**
     * Remove the specified Request from storage.
     * DELETE /requests/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var RequestModel $request */
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            return $this->sendError('Request not found');
        }

        $request->delete();

        return $this->sendSuccess('Request deleted successfully');
    }

    public function getTypes()
    {
        $types = RequestType::all();

        return $this->sendResponse($types,'');
    }
}
