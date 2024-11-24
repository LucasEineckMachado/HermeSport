<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir o conteúdo do arquivo index.php
include('index.php');
?>
