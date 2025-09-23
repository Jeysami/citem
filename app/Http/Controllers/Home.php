<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Home extends Controller{
    public function index(){
        $users = User::all();
        return view('home', ['users' => $users]);
    }

    public function register_account(){
        $user = new User();
        return view('form.step1');
    }
}

?>
