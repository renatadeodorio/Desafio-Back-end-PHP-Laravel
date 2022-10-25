<?php

namespace App\Http\Controllers;

use App\Models\Carteira;
use App\Models\Usuario;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index($id) {
        $user = Usuario::find($id);
        $saldo = Carteira::firstWhere('user_id', $user->id);
        return view('transfers', ["user"=>$user, "saldo"=>$saldo]);
    }
}
