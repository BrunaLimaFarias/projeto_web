<?php
    $titulo = $_POST["titulo"];
    $preco = $_POST["preco"];
    $img = $_POST["img"];

    $con = mysqli_connect("localhost:3306", "root", "root", "projeto_web");

    $query = "INSERT INTO produto (titulo, preco, img) VALUES ('$titulo','$preco','$img')";
    

    mysqli_query($con, $query);
?>
