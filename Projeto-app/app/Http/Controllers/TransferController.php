<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\User;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    protected $user;
    protected $wallet;

    public function __construct(User $user, Wallet $wallet)
    {
      $this->user = $user;
      $this->wallet = $wallet;
    }

    public function index($id) {
        $user = $this->user->find($id);
        $balance = $user->Wallet()->get();
        return view('transfers', compact('user', 'balance'));

    }

    public function show($id) {
        $users = $this->user->all();


       return view('transferToDo', compact('users', 'id'));

    }

    public function store(Request $request) {
        $user = $this->user->find($request->id);
        $wallet = $user->Wallet()->get();
        $user = $this->user->find($request->user);
        //dd($request->all());
        //criar a função que some ou diminua o valor da carteira
    }
}
