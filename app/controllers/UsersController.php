<?php

namespace App\Controllers;

use App\models\User;
use App\models\Cliente;

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

    public function cadastrar()
    {
        $usuario = $_POST;
        $usuarioId = User::cadastrar($usuario);

        return $this->responderJSON($usuario);
    }

    public function cadastro()
    {
        $clientes = Cliente::buscar();
        return view("cadastro-usuarios", compact("clientes"));
    }

    public function administrar()
    {
        $usuarios = User::buscar();
        return view('administracao-usuarios', compact('usuarios'));
    }

    public function update()
    {
        $usuario = $_POST;
        User::atualizar($usuario);

        return $this->responderJSON($usuario);
    }

    public function destroy()
    {
        $usuario = $_POST['id'];
        User::deletar($usuario);

        return $this->responderJSON($usuario);
    }

}
