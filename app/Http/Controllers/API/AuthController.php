<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Employee;
use App\Notifications\SendStatusRequestEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('token-name')->plainTextToken;
            $user->load(['employee']);
            return response()->json(['token' => $token, 'user' =>
            $user->employee], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    public function register(Request $request)
    {
        // Validaciones para usuario y empleado
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'dni' => 'required|integer',
            'identity_type_id' => 'required|integer|exists:identity_types,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|integer',
            'title' => 'required|string|max:255', // Agregar validación para title
            'department_id' => 'required|integer|exists:departments,id', // Validar ID del departamento
            'role' => 'required|string|max:255', // Validar rol
            // Puedes añadir validaciones adicionales si es necesario
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Crear el empleado asociado
        $employee = Employee::create([
            'dni' => $request->dni,
            'identity_type_id' => $request->identity_type_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'user_id' => $user->id,
            'title' => $request->title, // Agregar title aquí
        ]);

        // Asociar el empleado con el departamento y el rol
        $employee->department()->attach($request->department_id, [
            'role' => $request->role
        ]);

        // Responder con un JSON completo
        return response()->json([
            'message' => 'Employee created successfully',
            'employee' => $employee->load('department') // Incluye detalles del departamento
        ], 201);
    }
}
