<?php

namespace Database\Seeders;

use App\Models\IdentityType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndentityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Cédula Ciudadanía',"code"=>"C.C"]
        ];

        IdentityType::insert($types);
    }
}
