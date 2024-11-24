<?php
session_start();
include('conexao.php');

if (isset($_POST['email'], $_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
        $senhaHash = $usuario['senha'];

        // Verificar a senha criptografada
        if (password_verify($senha, $senhaHash)) {
            $_SESSION['usuario'] = $usuario['nome'];
            header("Location: conteudo.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    mysqli_close($conn);
} else {
    echo "Preencha todos os campos.";
}
?>
