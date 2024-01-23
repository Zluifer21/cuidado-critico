<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Request;
use App\Models\RequestType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $numberOfRequests = 10;

        for ($i = 0; $i < $numberOfRequests; $i++) {
            Request::create([
                'request_type_id' => RequestType::all()->random()->id,
                'employee_id' => Employee::all()->random()->id,
                'date' => Carbon::today()->addDays(rand(1, 365)),
                'time' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'long' => 10,
                'observations' => 'esta es una observacion',
            ]);
        }
    }
}
