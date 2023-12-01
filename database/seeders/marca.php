<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marca extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'idMarca' => '10',
                'descripcion' => 'Reebok'
            ],
            [
                'idMarca' => '20',
                'descripcion' => 'Adidas'
            ],
            [
                'idMarca' => '30',
                'descripcion' => 'Nike'
            ],
            [
                'idMarca' => '40',
                'descripcion' => 'Puma'
            ],
            [
                'idMarca' => '50',
                'descripcion' => 'Umbro'
            ],
        ];
       
        DB::table('marca')->insert($datos);
    }
}
