<?php

namespace App\models;

use App\Core\App;

class Cliente
{
    public static $table = 'clientes';

    public $id;
    public $nome;
    public $cnpj;
    public $sirius;
    public $responsavel;
    public $site;
    public $email;

    public static function cadastrar($values)
    {
        App::get('database')->insert(static::$table, $values);
    }

    public static function encontrar($table, $where = NULL)
    {
        App::get('database')->selectWhere(static::$table, $where);
    }


    public static function buscar()
    {
        $result = App::get('database')->selectAll(static::$table);
        return $result;
    }

}