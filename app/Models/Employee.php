<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    public $table = 'employees';

    public $fillable = [
        'dni',
        'identity_type_id',
        'first_name',
        'last_name',
        'phone',
        'user_id',
        'title'
    ];
    protected $appends = ['manager'];
    protected $casts = [
        'id' => 'integer',
        'dni' => 'integer',
        'identity_type_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'integer',
        'title' => 'string'
    ];

    public static array $rules = [

    ];

    public function identity(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\IdentityType::class, 'identity_type_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function department(): BelongsToMany
    {
        return $this->belongsToMany(Department::class, 'departments_employees', 'employee_id', 'department_id')->withPivot('role');
    }

    public function getManagerAttribute()
    {
        $department = $this->department()->first();

        if (!$department) {
            return null;
        }

        $manager = DB::table('departments_employees')
            ->join('employees', 'departments_employees.employee_id', '=', 'employees.id')
            ->where('role', 'lead')
            ->where('department_id', $department->pivot->department_id)
            ->first();

        return $manager ?? null;
    }
}
