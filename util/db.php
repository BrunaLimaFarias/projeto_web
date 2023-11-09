<?php

$servername = "localhost:3306";
$username = "admin";
$password = "admin";
$database = "projeto_web";

// conexao
$conn = new mysqli($servername, $username, $password, $database);

// testa conexao
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
