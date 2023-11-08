<?php

    $arquivo = $_FILES["arquivo"];
    $novo_endereco ="../Img/tmp/".$arquivo["name"];

    if (($arquivo["type"]) === "image/png") {
        
        move_uploaded_file($arquivo["tmp_name"], $novo_endereco);
        $query = mysqli_query($connection, "INSERT INTO produto(titulo, preco, img) VALUES($nome, $preco, $endereco)");
        $mensagem = "Upload feito com sucesso";
    }

    else{
        $mensagem = "Somente é permitido imagem em PNG";
    }

    $json = json_encode($mensagem);
    echo $json;
    