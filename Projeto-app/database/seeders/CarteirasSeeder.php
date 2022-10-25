<?php

namespace Database\Seeders;

use App\Models\Carteira;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarteirasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carteira::create([
            'user_id'=> '1',
            'saldo'=> 500,
        ]);

        Carteira::create([
            'user_id'=> '2',
            'saldo'=> 700,
        ]);
    }
}
