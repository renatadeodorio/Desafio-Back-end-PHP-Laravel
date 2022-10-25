<?php

namespace Database\Seeders;

use App\Models\Transferencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransferenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transferencia::create([
            'de_usuario_id' => '1',
            'para_usuario_id' => '2',
            'saldo' => 1000,
        ]);
    }
}
