<?php
$host = 'localhost';
$usuario = 'root'; // Altere se o seu usuário for diferente
$senha = ''; // Adicione sua senha aqui, se houver
$banco = 'hermesport_db';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
