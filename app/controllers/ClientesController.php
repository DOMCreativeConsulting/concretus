<?php

namespace App\Controllers;

use App\models\Cliente;

class ClientesController extends Controller
{

    public function index()
    {
        return view('cadastro-clientes');
    }

    public function cadastrar()
    {
        $cliente = $_POST;
        $clienteId = Cliente::cadastrar($cliente);

        return $this->responderJSON($cliente);
    }

}
