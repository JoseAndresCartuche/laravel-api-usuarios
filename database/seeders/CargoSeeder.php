<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('cargos')->truncate();

        $data = [
            [
                'id' => 1,
                'codigo' => 'ADMIN',
                'nombre' => 'Administrador',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ],
            [
                'id' => 2,
                'codigo' => 'LF',
                'nombre' => 'Lider Frontend',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ],
            [
                'id' => 3,
                'codigo' => 'LB',
                'nombre' => 'Lider Backend',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ],
            [
                'id' => 4,
                'codigo' => 'DF',
                'nombre' => 'Desarrollador Frontend',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'id' => 5,
                'codigo' => 'DB',
                'nombre' => 'Desarrollador Backend',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'id' => 6,
                'codigo' => 'ABG',
                'nombre' => 'Abogado',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'id' => 7,
                'codigo' => 'GD',
                'nombre' => 'Guardia',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'id' => 8,
                'codigo' => 'PLL',
                'nombre' => 'Pollero',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
        ];


        foreach ($data as $cargo) {
            DB::table('cargos')->insert($cargo);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
    }
}
