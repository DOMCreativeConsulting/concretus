<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;

class HomeController
{

    public function index()
    {
        $clientes = Cliente::numero('clientes');

        return view('index', compact('clientes'));
    }

    public function userIndex()
    {
        $arquivos = Arquivos::lista();

        return view('user-index', compact('arquivos'));
    }

}
