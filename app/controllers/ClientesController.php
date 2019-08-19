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
        dd($_POST);
        $clienteId = Cliente::cadastrar($cliente);
        $cliente = Cliente::buscar(["id", $clienteId]);

        return $this->responderJSON($cliente);
    }

}
