<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'name' => 'Renata',
            'email'=> 'renata@gmail.com',
            'document_id'=> '1111111111',
            'password'=> Hash::make('12345678'),
            'type'=> 'Comum',
        ]);

        Usuario::create([
            'name' => 'Renan',
            'email'=> 'renan@gmail.com',
            'document_id'=> '41713588848',
            'password'=> Hash::make('12345678'),
            'type'=> 'Lojista',
        ]);


    }
}
