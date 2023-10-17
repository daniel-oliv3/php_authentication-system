<?php 

/* Inicia a sessão */
session_start();

/* Define uma constante de controle */
define('CONTROL', true);

/* Verifica se existe um usuário logado */
$usuario_logado = $_SESSION['usuario'] ?? null;

/* Verifica qual é a rota na URL */
if(empty($usuario_logado)){
    $rota = 'login';
} else {
    $rota = $_GET['rota'] ?? 'home';
}

/* Analisa a rota */
$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
];

if(!key_exists($rota, $rotas)){
    die('Acesso Negado!');
} 

require_once $rotas[$rota];




















?>