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
        'observations',
        'status'
    ];

    protected $casts = [
        'id' => 'integer',
        'request_type_id' => 'integer',
        'employee_id' => 'integer',
        'date' => 'date',
        'time' => 'datetime',
        'long' => 'integer',
        'observations' => 'string',
        'status' => 'string'
    ];


    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id', 'id');
    }

    public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\RequestType::class, 'request_type_id', 'id');
    }

    public function medias()
    {
        return $this->morphMany(Media::class, 'medias');
    }
}
