<?php

namespace App\models;

use App\Core\App;
use App\models\Model;

class Arquivos extends Model
{

    public $id;
    public $nome;
    public $sirius;
    public $lido;
    public $status;

    public static $table = 'arquivos';

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

    public static function buscar()
    {
        $arquivos_banco = App::get('database')->selectAll(static::$table);

        return $arquivos_banco;
    }

    public static function cadastrar($arquivo)
    {
        App::get('database')->insert(static::$table, $arquivo);
    }

    public static function marcarLido($arquivo)
    {
        $dados['lido'] = 1;
        
        App::get('database')->update(static::$table, $dados, $where = ['id', $arquivo['id']]);
    }

}