<?php

    $email = $_POST['email'];

    $qtde = strlen($email);

    $mensagem = "";

    if ($qtde > 20) {
        $mensagem = "maior";
    }
    else {
        $mensagem = "menor";
    }

    $json = json_encode($mensagem);

    echo $json;

?>
