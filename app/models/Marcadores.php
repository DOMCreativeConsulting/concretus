<?php

namespace App\models;

use App\core\App;

class Marcadores extends Model
{

    public static $table = 'marcadores';

    public static function buscar()
    {
        $resultado = App::get('database')->selectAll(static::$table);

        return $resultado;
    }

}