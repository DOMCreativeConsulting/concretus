<?php

namespace App\models;

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

    public static function cadastrar($table, $values)
    {
        App::get('database')->insert($table, $values);
    }

    public static function buscar($table, $where = NULL)
    {
        App::get('database')->select($table, $where);
    }

}