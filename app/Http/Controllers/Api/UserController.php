<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Validators\UserValidator;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::all();
            return response()->json(['data' => $users, 'success' => true, 'message' => 'Listado de usuarios'], 200);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al obtener los usuarios'], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = UserValidator::validatorCreate($request);

            if ($validator->fails()) {
                return response()->json(['data' => $validator->errors(), 'success' => false, 'message' => 'No se ha podido crear el usuario'], 422);
            }

            $validated = $validator->validated();
            $user = User::create($validated);
            return response()->json(['data' => $user, 'success' => true, 'message' => 'Usuario creado'], 201);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al crear usuario: ' . $th], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json(['data' => $user, 'success' => true, 'message' => 'Usuario obtenido'], 200);
        } catch (ModelNotFoundException $th) {
            return response()->json(['success' => false, 'message' => 'Usuario no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = UserValidator::validatorUpdate($request, $id);

            if ($validator->fails()) {
                return response()->json(['data' => $validator->errors(), 'success' => false, 'message' => 'No se ha podido actualizar el usuario'], 422);
            }

            $validated = $validator->validated();
            $user = User::findOrFail($id);
            // $user->usuario = $validated['usuario'];
            // $user->email = $validated['email'];
            // $user->primerNombre = $validated['primerNombre'];
            // $user->segundoNombre = $validated['segundoNombre'];
            // $user->primerApellido = $validated['primerApellido'];
            // $user->segundoApellido = $validated['segundoApellido'];
            // $user->idDepartamento = $validated['idDepartamento'];
            // $user->idCargo = $validated['idCargo'];
            // $user->save();
            $user->update($validated);

            return response()->json(['data' => $user, 'success' => true, 'message' => 'Usuario actualizado'], 200);
        } catch (ModelNotFoundException $th) {
            return response()->json(['success' => false, 'message' => 'Usuario no encontrado'], 404);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al actualizar el usuario: ' . $th], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['success' => true, 'message' => 'Usuario eliminado'], 200);
        } catch (ModelNotFoundException $th) {
            return response()->json(['success' => false, 'message' => 'Usuario no encontrado'], 404);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al eliminar el usuario: ' . $th], 500);
        }
    }
}
