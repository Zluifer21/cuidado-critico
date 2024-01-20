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
}
