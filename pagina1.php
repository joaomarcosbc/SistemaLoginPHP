<?php
include_once 'dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;
if (!$logged) die('Você não possui acesso.');
?>
<?php include_once 'menu.php';?>
<p>Conteúdo restrito 1.</p>
