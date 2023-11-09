<?php
require_once("get_produtos.php");
$produtos = get_produtos();
// print_r($produtos); // para debug

?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script defer src="produtos.js"></script>
        <link rel="stylesheet" href="produtos.css">
        <title>Página de Produtos</title>
    </head>
    <body>
        <header>
            <div class="header-left">
                <img src="../Img/logo_pet.png" alt="LogoMarca">
                <input type="text" placeholder="Pesquisar">
                <button>Buscar</button>
            </div>
            <div class="header-right">
                <nav>
                    <ul>
                        <li><a href="../Administrador/Login/login.html">Administrador</a></li>
                        <li><a href="../Carrinho/carrinho.html">Carrinho</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section class="section_cards">
                <div id="produtos"></div>
            </section>
        </main>
    </body>
</html>
