<?php
session_start();
include('conexao.php');

// Verificar se os campos foram preenchidos
if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['cep']) && 
    !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['cep'])) {
    
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $cep = mysqli_real_escape_string($conn, $_POST['cep']);

    // Inserir o usuário no banco de dados
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $query = "INSERT INTO usuarios (nome, email, senha, cep) VALUES ('$nome', '$email', '$senhaHash', '$cep')";
    if (mysqli_query($conn, $query)) {
        echo 'Cadastro realizado com sucesso!';
    } else {
        echo 'Erro ao cadastrar. Tente novamente.';
    }

    mysqli_close($conn);
} else {
    echo 'Preencha todos os campos.';
}
?>
