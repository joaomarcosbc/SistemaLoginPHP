<?php
include_once 'dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;

if (!$logged) die('Você não possui acesso.');
?>

<p>Este conteúdo é restrito.</p>
<p><?php echo "Olá, {$_SESSION['usuario']}"; ?></p>