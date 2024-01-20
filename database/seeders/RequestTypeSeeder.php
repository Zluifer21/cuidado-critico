<?php

namespace Database\Seeders;

use App\Models\RequestType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types=[
            ['name'=>'calamidad domestica'],
            ['name'=>'consulta medica'],
            ['name'=>'licencia no remunerada'],
            ['name'=>'licencia remunerada'],
            ['name'=>'asuntos personales'],
            ['name'=>'asuntos laborales']];

        RequestType::insert($types);
    }
}
