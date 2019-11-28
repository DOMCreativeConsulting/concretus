<?php

namespace App\Controllers;

use App\models\Arquivos;

class MarcadoresController extends Controller
{

    public function trocar()
    {
        Arquivos::aletrarMarcador($_POST);

        return $this->responderJSON($_POST);
    }

}
