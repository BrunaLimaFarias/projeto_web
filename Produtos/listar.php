<?php

$con = mysqli_connect("localhost:3306", "root", "root", "projeto_web");

$query = "SELECT * FROM produtos";

$resultado = mysqli_query($con,$query);

$dados = array();

while($registro = mysqli_fetch_assoc($resultado)){
    array_push($dados, $registro);
}

$json = json_encode($dados);
echo $json;



?>