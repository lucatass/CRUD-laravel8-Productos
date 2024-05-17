<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Arroz',
                'peso_unitario_gr' => '1000',
                'cantidad' => '5',
                'perecedero' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Aceite de oliva',
                'peso_unitario_gr' => '750',
                'cantidad' => '8',
                'perecedero' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Chocolate negro',
                'peso_unitario_gr' => '200',
                'cantidad' => '12',
                'perecedero' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Agua mineral',
                'peso_unitario_gr' => '1500',
                'cantidad' => '20',
                'perecedero' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Huevos',
                'peso_unitario_gr' => '70',
                'cantidad' => '30',
                'perecedero' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Cerveza artesanal',
                'peso_unitario_gr' => '330',
                'cantidad' => '24',
                'perecedero' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
        
    }
}
