<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articulo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'referencia' => '100',
                'nombre' => 'Guayos',
                'descripcion' => 'Guayos Adidas tache alto',
                'color' => 'Blanco',
                'precioUnitario' => '220000',
                'observacion' => 'Garantia de 6 meses',
                'foto' => 'images/guayos.jpg',
                'marca' => '20'
            ],            [
                'referencia' => '101',
                'nombre' => 'Chaqueta',
                'descripcion' => 'Campera Puma para viento',
                'color' => 'Negro',
                'precioUnitario' => '120000',
                'observacion' => 'Garantia de 1 anio',
                'foto' => 'images/chaqueta.jpg',
                'marca' => '40'
            ],            
            [
                'referencia' => '102',
                'nombre' => 'Morral',
                'descripcion' => 'Morral Rebook',
                'color' => 'Azul',
                'precioUnitario' => '100000',
                'observacion' => 'Garantia de 2 años',
                'foto' => 'images/morral.jpg',
                'marca' => '10'
            ],           
             [
                'referencia' => '103',
                'nombre' => 'Gorra',
                'descripcion' => 'Gorra para deporte Nike',
                'color' => 'Negra',
                'precioUnitario' => '90000',
                'observacion' => 'Sin Garantia',
                'foto' => 'images/gorra.jpg',
                'marca' => '30'
            ],            
            [
                'referencia' => '104',
                'nombre' => 'Sudadera',
                'descripcion' => 'Sudadera impermeable',
                'color' => 'Gris',
                'precioUnitario' => '160000',
                'observacion' => 'Garantia de 2 años',
                'foto' => 'images/suda.jpg',
                'marca' => '50'
            ],

        ];
       
        DB::table('articulo')->insert($datos);
    }
}
