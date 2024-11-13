<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    public $fillable = [
        'codigo',
        'nombre',
        'activo',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'idCargo', 'id');
    }
}
