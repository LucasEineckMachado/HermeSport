<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <title>HermeSport</title>
</head>

<body>

    <!-- Cabeçalho -->
    <header> 
        <div class="logo">
            <img src="img/logo1.png" alt="Logo">
        </div>
    </header>

    <!-- Navegação -->
    <nav>
        <div class="nav-menu-container">
            <img class="logo2" src="img/logo2.png" alt="Logo Secundária"> <!-- Logo alinhada à esquerda -->
            <ul id="navMenu">
                <li class="nav-item"><a href="Unidades.html">Unidades</a></li>
                <li class="nav-item"><a href="Produtos.html">Produtos</a></li>
                <li class="nav-item"><a href="logout.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <!-- Corpo do site -->
    <div class="content-wrapper">
        <main>
            <div class="slides-container">
                <div class="slides fade">
                    <img src="img/banner1.png" alt="Banner 1">
                </div>
                <div class="slides fade">
                    <img src="img/banner2.png" alt="Banner 2">
                </div>
                <div class="slides fade">
                    <img src="img/banner3.png" alt="Banner 3">
                </div>
                <div class="slides fade">
                    <img src="img/banner4.png" alt="Banner 4">
                </div>
                <div class="slides fade">
                    <img src="img/img.png" alt="Banner 5">
                </div>
                <div class="slides fade">
                    <img src="img/mega.png" alt="Banner 6">
                </div>

                <!-- Botões -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Pontos de navegação -->
                <div class="dots-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                </div>
            </div>
        </main>

        <aside>
            <h2>Conheça a HermeSport</h2>
            <p>A HermeSport é uma loja de artigos esportivos que vende uma grande variedade de produtos para quem gosta de se exercitar e ter um estilo de vida ativo. No nosso site, você encontra roupas de treino, tênis de corrida, acessórios esportivos e até moda casual. Também oferecemos promoções em diferentes épocas do ano para atrair clientes.
            Procuramos tornar a experiência de compra fácil e rápida. Por isso, oferecemos pagamento seguro, entregas rápidas e uma navegação simples que ajuda você a encontrar o que procura.
            </p>
        </aside>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>© 2024 HermeSport. Todos os direitos reservados.</p>
    </footer>

    <script src="carroseel.js"></script>

</body>

</html>
