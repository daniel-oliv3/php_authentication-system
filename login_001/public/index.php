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

/* Se o usuario esta logado, mais a rota é login, vai redirecionar para home */
if(!empty($usuario_logado) && $rota == 'login'){
    $rota = 'home';
}


/* Analisa a rota */
$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
    'page1' => 'page1.php',
    'page2' => 'page2.php',
    'page3' => 'page3.php',
    'logout' => 'logout.php',
];

if(!key_exists($rota, $rotas)){
    die('Acesso Negado!');
} 

require_once $rotas[$rota];



?>