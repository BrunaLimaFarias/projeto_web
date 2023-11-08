<?php

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $con = mysqli_connect("localhost:3306", "root", "root", "projeto_web");

    $query = "INSERT INTO adm (email, senha) VALUES ('$email','$senha')";
    

    mysqli_query($con, $query);

?>