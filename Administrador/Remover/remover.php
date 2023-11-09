<?php
require_once("get_produtos.php");
$produtos = get_produtos();
//var_dump($produtos); // para debug
//echo " oiiiiia";
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="remover.js"></script>
    <link rel="stylesheet" href="../../Produtos/produtos.css">
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
                    <li><a href="../Login/login.html">Administrador</a></li>
                    <li><a href="../../Carrinho/carrinho.php">Carrinho</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="section_cards">
            <div id="produtos">
                <?php foreach ($produtos as $produto) { ?>
                    <div class="card_produto">
                        <div class="img_produto">
                            <img src="<?= $produto['img'] ?>" alt="<?= $produto['titulo'] ?>">
                        </div>
                        <div class="nome_produto">
                            <h3><?= $produto['titulo'] ?></h3>
                        </div>
                        <div class="preco_produto">
                            <p><?= $produto['preco'] ?></p>
                        </div>
                        <div class="adicionar_carrinho">
                            <button onclick="remove(<?= $produto['id'] ?>)">Remover</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>

</html>