<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDepartmentAPIRequest;
use App\Http\Requests\API\UpdateDepartmentAPIRequest;
use App\Models\Department;
use App\Repositories\DepartmentRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class DepartmentAPIController
 */
class DepartmentAPIController extends AppBaseController
{
    private DepartmentRepository $departmentRepository;

    public function __construct(DepartmentRepository $departmentRepo)
    {
        $this->departmentRepository = $departmentRepo;
    }

    /**
     * Display a listing of the Departments.
     * GET|HEAD /departments
     */
    public function index(Request $request): JsonResponse
    {
        $departments = $this->departmentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($departments->toArray(), 'Departments retrieved successfully');
    }

    /**
     * Store a newly created Department in storage.
     * POST /departments
     */
    public function store(CreateDepartmentAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $department = $this->departmentRepository->create($input);

        return $this->sendResponse($department->toArray(), 'Department saved successfully');
    }

    /**
     * Display the specified Department.
     * GET|HEAD /departments/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Department $department */
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            return $this->sendError('Department not found');
        }

        return $this->sendResponse($department->toArray(), 'Department retrieved successfully');
    }

    /**
     * Update the specified Department in storage.
     * PUT/PATCH /departments/{id}
     */
    public function update($id, UpdateDepartmentAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Department $department */
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            return $this->sendError('Department not found');
        }

        $department = $this->departmentRepository->update($input, $id);

        return $this->sendResponse($department->toArray(), 'Department updated successfully');
    }

    /**
     * Remove the specified Department from storage.
     * DELETE /departments/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Department $department */
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            return $this->sendError('Department not found');
        }

        $department->delete();

        return $this->sendSuccess('Department deleted successfully');
    }
}
