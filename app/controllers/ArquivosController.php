<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;
use App\models\User;

class ArquivosController extends Controller
{
    public function index()
    {
        $arquivos = Arquivos::buscar();

        foreach($arquivos as $arquivo){

            $where['sirius'] = $arquivo->sirius;
            $usuario = User::encontrar($where);

            $arquivo->sirius = $usuario[0]->sirius;
            $arquivo->usuario = $usuario[0]->nome;

        }

        return view("lista-arquivos", compact('arquivos'));
    }

    public function lista()
    {
        $arquivos = Arquivos::lista();

        return $this->responderJSON($arquivos);
    }

    public function marcarLido()
    {
        $arquivo = $_POST;

        Arquivos::marcarLido($arquivo);

        return $this->responderJSON($arquivo);
    }

    public function arquivados()
    {
        $arquivos = Arquivos::buscar();

        foreach($arquivos as $arquivo){

            $where['sirius'] = $arquivo->sirius;
            $usuario = User::encontrar($where);

            $arquivo->usuario = $usuario[0]->nome;

        }

        return view("lista-arquivados", compact("arquivos"));
    }

    public function userArquivados()
    {
        $arquivos = Arquivos::buscar();

        return view("user-arquivados", compact("arquivos"));
    }

    public function arquivar()
    {
        $arquivo = $_POST;
        
        Arquivos::arquivar($arquivo);

        return $this->responderJSON($arquivo);
    }

    public function desarquivar()
    {
        $arquivo = $_POST;
        
        Arquivos::desarquivar($arquivo);

        return $this->responderJSON($arquivo);
    }
}