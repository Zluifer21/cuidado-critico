<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Department extends Model
{
    public $table = 'departments';

    public $fillable = [
        'name',
        'description'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'integer'
    ];

    public static array $rules = [

    ];

    public function employees():BelongsToMany
    {
        return $this->belongsToMany(Employee::class,'departments_employees','department_id','employee_id')->withPivot('role');
    }

}
