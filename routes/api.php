<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\API\{
    RequestAPIController,
    EmployeeAPIController,
    DepartmentAPIController,
    AuthController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function (){
    Route::resource('departments', DepartmentAPIController::class)
        ->except(['create', 'edit']);

    Route::resource('employees', EmployeeAPIController::class)
        ->except(['create', 'edit']);

    Route::resource('requests', RequestAPIController::class)
        ->except(['create', 'edit']);

    Route::get('request-types',[RequestAPIController::class,'getTypes']);
    Route::post('requests/generatePDF', [RequestAPIController::class, 'generatePDF']);
});
Route::post('login',[AuthController::class,'login']);
