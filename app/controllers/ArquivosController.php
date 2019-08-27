<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;

class ArquivosController extends Controller
{
    public function index()
    {
        $arquivos = Arquivos::lista();

        return view("lista-arquivos", compact('arquivos'));
    }

    public function lista()
    {
        $arquivos = Arquivos::lista();

        return $this->responderJSON($arquivos);
    }
}