<?php

namespace App\Http\Validators;

use Illuminate\Support\Facades\Validator;

class UserValidator
{
    public static function validatorCreate($request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'usuario' => 'required|string|max:100|unique:users,usuario',
                'email' => 'required|string|email|max:255|unique:users,email',
                'primerNombre' => 'required|string|max:255',
                'segundoNombre' => 'nullable|string|max:255',
                'primerApellido' => 'required|string|max:255',
                'segundoApellido' => 'nullable|string|max:255',
                'idDepartamento' => 'required|numeric',
                'idCargo' => 'required|numeric',
            ],
            [
                'required' => 'El campo :attribute es obligatorio.',
            ]
        );
        return $validator;
    }

    public static function validatorUpdate($request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'usuario' => 'string|max:100|unique:users,usuario,' . $id,
                'email' => 'string|email|max:255|unique:users,email,' . $id,
                'primerNombre' => 'string|max:255',
                'segundoNombre' => 'nullable|string|max:255',
                'primerApellido' => 'string|max:255',
                'segundoApellido' => 'nullable|string|max:255',
                'idDepartamento' => 'required|numeric',
                'idCargo' => 'required|numeric',
            ],
            [
                'required' => 'El campo :attribute es obligatorio.',
            ]
        );
        return $validator;
    }
}
