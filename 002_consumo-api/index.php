<?php

// Definir constante para controlar o fluxo da aplicação
define('CONTROL', true);


// incluir arquivos
$routes = require_once('inc/routes.php');


// Definir a rota atual
$routes = $_GET['route'] ?? 'home';

if(!in_array($routes, $routes)) {
    $routes = '404';
}

// Fluxo das rotas
switch($routes) {
    case 'home':
        require_once('inc/header.php');
        require_once('inc/home.php');
        require_once('inc/footer.php');
        break;
    case '404':
        require_once('inc/header.php');
        require_once('inc/404.php');
        require_once('inc/footer.php');
        break;
}










?>