<?php

$producao = false;

if(!$producao){

    return [
        'database' => [
            'name' => 'concretus',
            'username' => 'root',
            'password' => '',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}else{

    return [
        'database' => [
            'name' => 'domcom_sistema_concretus',
            'username' => 'domcom_sistema_concretus',
            'password' => 'xsKjaD-5=nb;',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}