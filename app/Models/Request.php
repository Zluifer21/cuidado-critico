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
        'status',
        'reason'
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

    public static array $rules = [
        'request_type_id' => 'required|exists:request_types,id',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i:s',
        'long' => 'required|integer',
        'observations' => 'required|string',
        'files.*' => 'nullable|file|mimes:jpeg,png,pdf,docx|max:2048',
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id', 'id')->with(['department']);
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
