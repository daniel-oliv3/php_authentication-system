<?php
defined('CONTROL') or die('Acesso Negado!!');

/* Efetua o logout */
session_destroy();

/* Voltar para a página inicial */
header('Location: index.php?rota=login');

?>