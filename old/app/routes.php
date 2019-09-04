<?php

$folder = 'concretus';

$router->post("$folder/login", 'UsersController@login');
$router->get("$folder/logout", 'UsersController@logout');

$router->get("$folder/recuperar-senha", 'UsersController@recuperarSenha');

$router->post("$folder/marcar-lido", 'ArquivosController@marcarLido');
$router->post("$folder/arquivar", 'ArquivosController@arquivar');
$router->post("$folder/desarquivar", 'ArquivosController@desarquivar');

$router->post("$folder/enviar-email", 'EmailController@enviar');
$router->post("$folder/atualizar-senha", 'UsersController@atualizarSenha');

$router->get("$folder/perfil", 'UsersController@perfil');

if(isset($_SESSION['hierarquia']) && $_SESSION['hierarquia'] == 'user'){

    $router->get("$folder", 'HomeController@userIndex');
    $router->get("$folder/home", 'HomeController@userIndex');

    $router->get("$folder/user-arquivados", 'ArquivosController@userArquivados');

}else{

    $router->get("$folder", 'HomeController@index');
    $router->get("$folder/home", 'HomeController@index');
    
    $router->get("$folder/cadastro-clientes", 'ClientesController@index');
    $router->get("$folder/administracao-clientes", 'ClientesController@administrar');
    $router->post("$folder/cadastrar-cliente", 'ClientesController@cadastrar');
    $router->get("$folder/clientes", 'ClientesController@clientes');
    $router->post("$folder/atualiza-cliente", 'ClientesController@update');
    $router->post("$folder/deletar-cliente", 'ClientesController@destroy');
    
    $router->get("$folder/tela-login", 'UsersController@index');
    $router->get("$folder/cadastro-usuarios", 'UsersController@cadastro');
    $router->post("$folder/cadastrar-usuario", 'UsersController@cadastrar');
    $router->get("$folder/administrar-usuarios", 'UsersController@administrar');
    $router->post("$folder/atualiza-usuario", 'UsersController@update');
    $router->post("$folder/deletar-usuario", 'UsersController@destroy');
    
    $router->get("$folder/arquivos", 'ArquivosController@index');
    $router->get("$folder/listar-arquivos", 'ArquivosController@lista');
    $router->get("$folder/arquivados", 'ArquivosController@arquivados');

}