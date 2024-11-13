<?php

namespace App\Http\Controllers\Api;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $cargos = Cargo::with(['userCreation'])->get();
            return response()->json(['data' => $cargos, 'success' => true, 'message' => 'Listado de cargos'], 200);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al obtener los cargos'], 500);
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
            $cargo = Cargo::with(['userCreation'])->where('id', $id)->firstOrFail();
            return response()->json(['data' => $cargo, 'success' => true, 'message' => 'Cargo obtenido'], 200);
        } catch (ModelNotFoundException $th) {
            return response()->json(['success' => false, 'message' => 'Cargo no encontrado'], 404);
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
