<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Exemplo de validação e exibição dos dados
    echo "<h1>Login Realizado com Sucesso!</h1>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Senha: $senha</p>";
}
?>
