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

    public function administrar()
    {
        $clientes = Cliente::buscar();
        return view('administracao-clientes', compact('clientes'));
    }

    public function clientes()
    {
        $clientes = Cliente::buscar();
        return  $this->responderJSON($clientes);
    }

    public function update()
    {
        $cliente = $_POST;
        Cliente::atualizar($cliente);

        return $this->responderJSON($cliente);
    }

    public function destroy()
    {
        $cliente = $_POST['id'];
        Cliente::deletar($cliente);

        return $this->responderJSON($cliente);
    }

}
