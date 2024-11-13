<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamentos';

    protected $fillable = [
        'codigo',
        'nombre',
        'activo',
    ];

    protected $hidden = [
        'idUsuarioCreacion'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'idDepartamento', 'id');
    }

    public function userCreation() {
        return $this->belongsTo(User::class, 'idUsuarioCreacion', 'id');
    }
}
