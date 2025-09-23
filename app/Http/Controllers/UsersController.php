<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register_account(){
        $user = new User();
        return view('form', ['user' => $user, 'action' => 'Create', 'actionUrl' => 'register_company']);
    }
}
