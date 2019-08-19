<?php

namespace App\models;

class Model
{

    public function store($table, $values)
    {
        App::get('database')->insert($table, $values);
    }

    public function get($table, $where = NULL)
    {
        App::get('database')->select($table, $where);
    }

}