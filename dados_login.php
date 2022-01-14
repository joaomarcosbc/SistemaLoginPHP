<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
}

$_SESSION['logged'] = $_SESSION['logged'] ?? False;

// DADOS DA BASE DE DADOS (Simula a consulta no BD)
$usuario_db = 'jmbcerqueira';
$senha_db = '123456';

$p_usuario = addslashes($_POST['usuario'] ?? NULL);
$p_senha = addslashes($_POST['senha'] ?? NULL);

if ($p_usuario == $usuario_db && $p_senha == $senha_db) {
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['logged'] = True;
}
?>