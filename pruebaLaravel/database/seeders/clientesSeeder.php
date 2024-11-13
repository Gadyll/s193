<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Perex',
                'email' => 'Juan@gmail.com',
                'telefono' => '+1234567890',
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Santos',
                'email' => 'Pedro@gmail.com',
                'telefono' => '+1654567890',
            ],
            [
                'nombre' => 'Gus',
                'apellido' => 'Ronmos',
                'email' => 'Gus@gmail.com',
                'telefono' => '+7890667890',
            ]]);
    }
}
