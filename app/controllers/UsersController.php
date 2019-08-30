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
        $clientes = Cliente::buscar();
        return view('administracao-usuarios', compact('usuarios','clientes'));
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

    public function perfil()
    {
        return view("perfil");
    }

    public function recuperarSenha()
    {
        return view('recuperar-senha');
    }

    public function atualizarSenha()
    {
        $usuario = $_POST;
        
        $dados['senha'] = $_POST['senha'];
        $dados['id'] = $_POST['userId'];

        User::atualizar($dados);

        return $this->responderJSON($usuario);
    }

}
