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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Response;

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

        $requests = $this->requestRepository->getAll();
        return $this->sendResponse($requests->toArray(), 'Requests retrieved successfully');
    }

    /**
     * Store a newly created Request in storage.
     * POST /requests
     */
    public function store(CreateRequestAPIRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['employee_id'] = auth()->user()->employee->id;
            $new_request = $this->requestRepository->create($input);
            if (isset($input['files'])) {
                foreach ($input['files'] as $file) {
                    $path = Storage::disk('public')->put('requests', $file);
                    $new_request->medias()->create([
                        'url' => $path,
                        'name' => $file->getClientOriginalName()
                    ]);
                }
            }
            $new_request->load('medias');
            DB::commit();
            return $this->sendResponse($new_request->toArray(), 'Request saved successfully');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return $this->sendError('Error saving request');
        }
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

        return $this->sendResponse($types, '');
    }

    public function generatePDF(RequestModel $request)
    {
        $request->load('employee');
        $pdf = PDF::loadView('requests/pdfs/request_status', compact('request'));

        return Response::make(
            $pdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="request_status.pdf"'
            ]
        );
    }
}
