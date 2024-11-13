<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('departamentos')->truncate();

        $data = [
            [
                'id' => 1,
                'codigo' => 'TI',
                'nombre' => 'Tecnologias de la informacion',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ],
            [
                'id' => 2,
                'codigo' => 'LEG',
                'nombre' => 'Legal',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ],
            [
                'id' => 3,
                'codigo' => 'SEG',
                'nombre' => 'Seguridad',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ],
            [
                'id' => 4,
                'codigo' => 'E&B',
                'nombre' => 'Eventos y Buffets',
                'activo' => true,
                'idUsuarioCreacion' => 1
            ]
        ];

        foreach ($data as $departamento) {
            DB::table('departamentos')->insert($departamento);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
