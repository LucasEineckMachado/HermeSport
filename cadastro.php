<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];

    // Exemplo de validação e exibição dos dados
    echo "<h1>Cadastro Realizado com Sucesso!</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Senha: $senha</p>";
    echo "<p>Cep: $cep</p>";
}
?>
