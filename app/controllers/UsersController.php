<?php

namespace App\Controllers;

use App\models\User;

class UsersController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $usuario = User::login();

        if(!empty($usuario)){
            return $this->responderJSON(true);
        }else{
            return $this->responderJSON(false);
        }
    }

    public function logout()
    {
        User::logout();

        header("Location: home");
    }

}
