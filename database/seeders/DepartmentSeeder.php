<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $departments = [
            ['name' => 'administrativo'],
            ['name' => 'asistencial'],
            ['name' => 'contabilidad'],
            ['name' => 'gerencia'],
        ];

        Department::insert($departments);
    }
}
