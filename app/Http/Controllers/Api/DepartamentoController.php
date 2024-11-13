<?php

namespace App\Http\Controllers\Api;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $departamentos = Departamento::with(['userCreation'])->get();
            return response()->json(['data' => $departamentos, 'success' => true, 'message' => 'Listado de departamentos'], 200);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al obtener los departamentos'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $departamento = Departamento::with(['userCreation'])->where('id', $id)->firstOrFail();
            return response()->json(['data' => $departamento, 'success' => true, 'message' => 'Departamento obtenido'], 200);
        } catch (ModelNotFoundException $th) {
            return response()->json(['success' => false, 'message' => 'Departamento no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
