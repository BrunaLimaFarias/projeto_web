<?php
    $titulo = $_POST["titulo"];
    $preco = $_POST["preco"];
    $img = $_POST["img"];

    $con = mysqli_connect("localhost:3306", "root", "PUC@1234", "pucpr");

    $query = "INSERT INTO produto (id, img, titulo, preco) VALUES ('$titulo','$preco','$img')";

    mysqli_query($con, $query);
?>