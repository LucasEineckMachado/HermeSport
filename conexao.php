<?php
$servername = "localhost";
$username = "root"; // seu nome de usuário MySQL
$password = ""; // sua senha MySQL
$dbname = "hermesport_db"; // seu banco de dados

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
