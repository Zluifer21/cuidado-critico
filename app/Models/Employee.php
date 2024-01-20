<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    public $table = 'employees';

    public $fillable = [
        'dni',
        'identity_type_id',
        'first_name',
        'last_name',
        'phone'
    ];

    protected $casts = [
        'id' => 'integer',
        'dni' => 'integer',
        'identity_type_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'integer'
    ];

    public static array $rules = [

    ];

    public function identity(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\IdentityType::class, 'id', 'identity_type_id');
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function department():BelongsToMany
    {
        return $this->belongsToMany(Department::class,'departments_employees','employee_id','department_id')->withPivot('role');
    }
}
