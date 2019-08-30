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

    public static function listaPasta()
    {
        try{
            $pasta = opendir("public/files/".$_SESSION['sirius']);
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

    public static function buscarSirius()
    {
        $dados['sirius'] = $_SESSION['sirius'];

        $arquivos_banco = App::get('database')->selectWhere(static::$table, $dados);

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

    public static function arquivar($arquivo)
    {
        $dados['status'] = 'arquivado';

        App::get('database')->update(static::$table, $dados, $where = ['id', $arquivo['id']]);
    }

    public static function desarquivar($arquivo)
    {
        $dados['status'] = 'entrada';

        App::get('database')->update(static::$table, $dados, $where = ['id', $arquivo['id']]);
    }

}