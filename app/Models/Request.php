<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Request extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'requests';

    public $fillable = [
        'request_type_id',
        'employee_id',
        'date',
        'time',
        'long',
        'obvservations',
        'status'
    ];

    protected $casts = [
        'id' => 'integer',
        'request_type_id' => 'integer',
        'employee_id' => 'integer',
        'date' => 'date',
        'time' => 'datetime',
        'long' => 'integer',
        'obvservations' => 'string',
        'status' => 'string'
    ];


    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'id', 'employee_id');
    }

    public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\RequestType::class, 'id', 'request_type_id');
    }
}
