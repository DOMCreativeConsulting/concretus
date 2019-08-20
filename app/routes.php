<?php

$folder = 'concretus';

$router->get("$folder", 'HomeController@index');
$router->get("$folder/home", 'HomeController@index');

$router->get("$folder/cadastro-clientes", 'ClientesController@index');
$router->get("$folder/administracao-clientes", 'ClientesController@administrar');
$router->post("$folder/cadastrar-cliente", 'ClientesController@cadastrar');
$router->get("$folder/clientes", 'ClientesController@clientes');