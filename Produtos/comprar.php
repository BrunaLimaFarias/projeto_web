<?php
    $id_produto = $_POST["id_produto"];
    $quantidade = $_POST["quantidade"];
    
    if (empty($quantidade)) {
        $quantidade = "1";
    }

    $con = mysqli_connect("localhost:3306", "root", "root", "projeto_web");

    $query = "INSERT INTO carrinho (id_produto, quantidade VALUES ($id_produto, $quantidade)";
    

    mysqli_query($con, $query);
?>