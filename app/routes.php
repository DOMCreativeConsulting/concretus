<?php

$folder = 'concretus';

$router->get("$folder", 'HomeController@index');
$router->get("$folder/home", 'HomeController@index');

$router->get("$folder/cadastro-clientes", 'ClientesController@index');
$router->post("$folder/cadastrar-cliente", 'ClientesController@cadastrar');