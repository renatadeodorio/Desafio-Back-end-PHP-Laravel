<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\User;

class HomeController extends Controller
{
    protected $user;
    protected $wallet;

    public function __construct(User $user, Wallet $wallet)
    {
      $this->user = $user;
      $this->wallet = $wallet;
    }

    public function index() {

        $users=$this ->user->all();
        return view('welcome', compact('users'));

    }

}
