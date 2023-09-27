<?php

    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $conexao = mysqli_connect("localhost:3306", "root", "root", "projetoWEB");

    $query = "INSERT INTO cadastro (nome, usuario, email, senha) VALUES ('$nome', '$usuario', '$email', '$senha')";



    mysqli_query($conexao, $query);

?>
