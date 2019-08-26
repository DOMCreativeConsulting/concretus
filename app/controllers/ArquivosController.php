<?php

namespace App\Controllers;

use App\models\Cliente;

class ArquivosController extends Controller
{
    public function index()
    {
        return view("lista-arquivos");
    }
}