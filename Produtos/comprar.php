<?php
    $id_produto = $_POST["id_produto"];
    $quantidade = $_POST["quantidade"];

    $con = mysqli_connect("localhost:3306", "root", "root", "projeto_web");

    $query = "INSERT INTO carrinho (id_produto, quantidade VALUES ($id_produto, $quantidade)";
    

    mysqli_query($con, $query);
?>