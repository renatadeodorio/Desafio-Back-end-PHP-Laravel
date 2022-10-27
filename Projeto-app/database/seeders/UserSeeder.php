<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Renata',
            'email'=> 'renata@gmail.com',
            'document_id'=> '1111111111',
            'password'=> '123456',
            'type'=> 'Comum',
        ]);

        User::create([
            'name' => 'Roberta',
            'email'=> 'roberta@gmail.com',
            'document_id'=> '22222222222',
            'password'=> '123456',
            'type'=> 'Comum',
        ]);

        User::create([
            'name' => 'Renan',
            'email'=> 'renan@gmail.com',
            'document_id'=> '41713588848',
            'password'=> '123456',
            'type'=> 'Lojista',
        ]);

        User::create([
            'name' => 'Rafaela',
            'email'=> 'rafaela@gmail.com',
            'document_id'=> '41713588847',
            'password'=> '123456',
            'type'=> 'Comum',
        ]);

        User::create([
            'name' => 'João',
            'email'=> 'joao@gmail.com',
            'document_id'=> '41713588841',
            'password'=> '123456',
            'type'=> 'Lojista',
        ]);

        User::create([
            'name' => 'Diego',
            'email'=> 'diego@gmail.com',
            'document_id'=> '41713588845',
            'password'=> '123456',
            'type'=> 'Lojista',
        ]);

        User::create([
            'name' => 'Ives',
            'email'=> 'ives@gmail.com',
            'document_id'=> '41713588844',
            'password'=> '123456',
            'type'=> 'Comum',
        ]);

    }
}
