<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create([
            'user_id'=> '1',
            'balance'=> 500,
        ]);

        Wallet::create([
            'user_id'=> '2',
            'balance'=> 700,
        ]);

        Wallet::create([
            'user_id'=> '3',
            'balance'=> 800,
        ]);
    }
}
