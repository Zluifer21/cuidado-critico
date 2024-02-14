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
            ['name' => 'administracion', 'display_name' => 'administrativo'],
            ['name' => 'asistencial', 'display_name' => 'asistencial'],
            ['name' => 'facturacion', 'display_name' => 'administrativo'],
            ['name' => 'gerencia', 'display_name' => 'gerencia'],
            ['name' => 'financiero', 'display_name' => 'administrativo'],

        ];

        Department::insert($departments);
    }
}
