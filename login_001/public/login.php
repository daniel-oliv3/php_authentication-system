<?php
defined('CONTROL') or die('Acesso Negado!!');

/* Verifica se o formulário foi submetido */
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    /* Verifica se o usuário e a senha foram submetidas */
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if(empty($usuario) || empty($senha)){
        $erro = 'Usuário e senha são obrigatórios';
    }

    /* Verifica se o usuário e a senha são válidos (match) */
    if(empty($erro)){

        $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

        foreach($usuarios as $user){
            if($user['usuario'] == $usuario && password_verify($senha, $user['senha'])){
                
                /* Efetua o login  */
                $_SESSION['usuario'] = $usuario;

                /* Volta a página inicial  */
                header('Location: index.php?rota=home');
            }        
        }

        /* Login inválido */
        $erro = 'Usuário ou senha inválidos';
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<link rel="shortcut icon" href=""/>
</head>
<body>


<!-- Formulário de Login -->
<form action="index.php?page=login" method="post">
    <h3>Login</h3>
    <div>
        <label for="usuario">Usuário</label>
        <input type="email" name="usuario" id="usuario">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
    </div>
    <div>
        <button>Entrar</button>
    </div>
</form>

<!-- Mensagem de erro  -->
<?php if(!empty($erro)): ?>
    <p style="color: red"><?= $erro ?></p>
<?php endif; ?>






	
	<script src=""></script>
</body>
</html>