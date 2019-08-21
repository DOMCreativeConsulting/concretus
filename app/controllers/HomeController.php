<?php

namespace App\Controllers;

use App\models\Cliente;

class HomeController
{

    public function index()
    {
        $clientes = Cliente::numero('clientes');

        return view('index', compact('clientes'));
    }

}
