<?php
require_once("get_carrinho.php");
$produtos = get_carrinho();
// print_r($produtos); // para debug

$total = 0

?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="carrinho.css">
        <script defer src="carrinho.js"></script>
        <title>Seu Carrinho - Nome da Loja</title>
    </head>
    <body>
        <header>

            <div class="logo">
                <img src="../Img/logo_pet.png" alt="Logo da Empresa">
            </div>

            <div class="titulo">
                <h1>Seu carrinho</h1>
            </div>

            <div class="links">
                <nav>
                    <ul>
                        <li><a href="../Produtos/produtos.php">Produtos</a></li>
                    </ul>    
                </nav>
            </div>

        </header>
        <main>
        <footer>
            <div class="lista-carrinho">
                <div id="produtos">
                <?php foreach ($produtos as $produto) { ?>
                    <div class="card_produto">
                        <div class="img_produto">
                            <img src="<?= $produto['img'] ?>" alt="<?= $produto['titulo'] ?>">
                        </div>
                        <div class="nome_produto">
                            <h3> <?= $produto['titulo'] ?></h3>
                        </div>
                        <div class="preco_produto">
                            <p> <?= $produto['preco'] ?> </p>
                        </div>                        
                    </div>
                <?php 
            $total += $produto['preco'];
            } ?>
                </div>
            </div>
            <div class="finalizar-compra">
                <p>Total: 
                <?= $total ?></p>
                <a href="../Compra/selecionar/selecionar.html">
                    <button>Finalizar Compra</button>
                </a>
            </div>
        </footer>
        </main>
    </body>
</html>
