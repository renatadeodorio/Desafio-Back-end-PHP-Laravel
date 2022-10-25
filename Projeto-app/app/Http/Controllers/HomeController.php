<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $users = Usuario::all();
        return view('welcome', ["users"=>$users]);
    }
}
