<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;

class ArquivosController extends Controller
{
    public function index()
    {
        $arquivos_atuais = Arquivos::lista();

        $arquivos_salvos = Arquivos::buscar();

        $arquivos = [];

        foreach($arquivos_salvos as $arquivo){
            array_push($arquivos, $arquivo->nome);
        }

        $nao_cadastrados = array_diff($arquivos_atuais, $arquivos);

        foreach ($nao_cadastrados as $nao_cadastrado){
            $file['nome'] = $nao_cadastrado;
            $file['sirius'] = '123';
            $file['status'] = 'entrada';
            $file['lido'] = 0;

            Arquivos::cadastrar($file);
        }

        $arquivos = Arquivos::buscar();

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

        return view("lista-arquivados", compact("arquivos"));
    }
}