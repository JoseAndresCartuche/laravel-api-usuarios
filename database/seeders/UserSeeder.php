<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();

        $data = [
            [
                'id' => 1,
                'usuario' => 'ppicapiedra',
                'email' => 'ppoicapiedra@mail.com',
                'primerNombre' => 'Pedro',
                'segundoNombre' => null,
                'primerApellido' => 'Picapiedra',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 1
            ],
            [
                'id' => 2,
                'usuario' => 'pmarmol',
                'email' => 'pmarmol@mail.com',
                'primerNombre' => 'Pablo',
                'segundoNombre' => null,
                'primerApellido' => 'Marmol',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 2
            ],
            [
                'id' => 3,
                'usuario' => 'jalimana',
                'email' => 'jalimana@mail.com',
                'primerNombre' => 'Juanito',
                'segundoNombre' => null,
                'primerApellido' => 'Alimana',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 3
            ],
            [
                'id' => 4,
                'usuario' => 'wwhite',
                'email' => 'wwhite@mail.com',
                'primerNombre' => 'Walter',
                'segundoNombre' => null,
                'primerApellido' => 'White',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 4
            ],
            [
                'id' => 5,
                'usuario' => 'jpinkman',
                'email' => 'jpinkman@mail.com',
                'primerNombre' => 'Jesse',
                'segundoNombre' => null,
                'primerApellido' => 'Pinkman',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 5
            ],
            [
                'id' => 6,
                'usuario' => 'sgoodman',
                'email' => 'sgoodman@mail.com',
                'primerNombre' => 'Saul',
                'segundoNombre' => null,
                'primerApellido' => 'Goodman',
                'segundoApellido' => null,
                'idDepartamento' => 2,
                'idCargo' => 6
            ],
            [
                'id' => 7,
                'usuario' => 'mehrmantraut',
                'email' => 'mehrmantraut@mail.com',
                'primerNombre' => 'Mike',
                'segundoNombre' => null,
                'primerApellido' => 'Ehrmantraut',
                'segundoApellido' => null,
                'idDepartamento' => 3,
                'idCargo' => 7
            ],
            [
                'id' => 8,
                'usuario' => 'kwexler',
                'email' => 'kwexler@mail.com',
                'primerNombre' => 'Kimberly',
                'segundoNombre' => null,
                'primerApellido' => 'Wexler',
                'segundoApellido' => null,
                'idDepartamento' => 2,
                'idCargo' => 6
            ],
            [
                'id' => 9,
                'usuario' => 'gfring',
                'email' => 'gfring@mail.com',
                'primerNombre' => 'Gustavo',
                'segundoNombre' => null,
                'primerApellido' => 'Fring',
                'segundoApellido' => null,
                'idDepartamento' => 4,
                'idCargo' => 8
            ]
        ];

        foreach ($data as $user) {
            DB::table('users')->insert([$user]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
