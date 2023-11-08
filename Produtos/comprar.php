<?php
    $quantidade = $_POST["quantidade"];

    $con = mysqli_connect("localhost:3306", "root", "root", "projeto_web");

    $query = "INSERT INTO carrinho (quantidade) VALUES ('$quantidade')";
    

    mysqli_query($con, $query);
?>
