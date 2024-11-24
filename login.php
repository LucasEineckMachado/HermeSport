<?php
session_start();

// Conectar ao banco de dados
include("conexao.php");

// Processamento do login
if (isset($_POST['login_usuario']) && isset($_POST['login_senha'])) {
    $usuario = $_POST['login_usuario'];
    $senha = $_POST['login_senha'];
    
    // Verificar se o usuário existe
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: conteudo.php");
        exit();
    } else {
        echo "<script>alert('Usuário ou senha inválidos.');</script>";
    }
}

// Processamento do cadastro
if (isset($_POST['cadastro_usuario']) && isset($_POST['cadastro_senha'])) {
    $usuario_cadastro = $_POST['cadastro_usuario'];
    $senha_cadastro = $_POST['cadastro_senha'];
    
    // Verificar se o usuário já existe
    $query_check = "SELECT * FROM usuarios WHERE usuario = '$usuario_cadastro'";
    $resultado_check = mysqli_query($conn, $query_check);
    
    if (mysqli_num_rows($resultado_check) > 0) {
        echo "<script>alert('Usuário já existe.');</script>";
    } else {
        // Inserir o novo usuário
        $query_insert = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario_cadastro', '$senha_cadastro')";
        if (mysqli_query($conn, $query_insert)) {
            echo "<script>alert('Cadastro realizado com sucesso! Você pode fazer login agora.');</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar usuário.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Página de Login | HermeSport</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Formulário de Cadastro -->
        <div class="form-container cadastro">
        <form id="formCadastro" method="POST">
    <h1>Criar Conta</h1>
    <input type="text" id="nome" name="nome" placeholder="Nome" required>
    <input type="email" id="email" name="email" placeholder="E-mail" required>
    <input type="password" id="senha" name="senha" placeholder="Senha" required>
    <input type="text" id="cep" name="cep" placeholder="Cep" required>
    <button type="button" onclick="cadastrarUsuario()">Cadastrar</button>
    <p id="mensagemCadastro"></p>
</form>


<script>
    function cadastrarUsuario() {
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const senha = document.getElementById('senha').value;
        const cep = document.getElementById('cep').value;

        // Verificar se todos os campos estão preenchidos
        if (!nome || !email || !senha || !cep) {
            document.getElementById('mensagemCadastro').textContent = 'Preencha todos os campos.';
            return;
        }

        // Fazer a requisição Ajax para processar o cadastro
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'processa_cadastro.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                const resposta = xhr.responseText;
                document.getElementById('mensagemCadastro').textContent = resposta;

                // Limpar os campos do formulário após o cadastro
                if (resposta === 'Cadastro realizado com sucesso!') {
                    document.getElementById('formCadastro').reset();
                }
            } else {
                document.getElementById('mensagemCadastro').textContent = 'Erro ao processar o cadastro.';
            }
        };
        xhr.send(`nome=${nome}&email=${email}&senha=${senha}&cep=${cep}`);
    }
</script>

        </div>

        <!-- Formulário de Login -->
        <div class="form-container login">
        <form action="processa_login.php" method="POST">
    <h1>Entrar</h1>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>

        </div>

        <!-- Painel de Alternância -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo de Volta!</h1>
                    <p>Insira seus dados pessoais para utilizar todas as funcionalidades do site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Amigo!</h1>
                    <p>Cadastre-se com seus dados pessoais para utilizar todas as funcionalidades do site</p>
                    <button class="hidden" id="register">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>
