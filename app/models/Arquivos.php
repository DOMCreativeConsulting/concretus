<?php

namespace App\models;

use App\Core\App;
use App\models\Model;

class Arquivos extends Model
{

    public static function lista()
    {
        try{
            $pasta = opendir('public/files');
        }catch(Exception $e){
            dd("Diretório não encontrado!");
        }

        $arquivos = [];

        while(($arquivo = readdir($pasta)) !== FALSE){
            if($arquivo != '.' && $arquivo != '..'){
                array_push($arquivos, $arquivo);
            }
        }

        return $arquivos;
    }

}