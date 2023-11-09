<?php
    require_once("../../util/db.php");

    $titulo = $_POST["titulo"];
    $preco = $_POST["preco"];
    $arquivo = $_FILES["arquivo"];
    $img = "../Img/".$arquivo["name"];
    $localsalvo ="../../Img/".$arquivo["name"];

    if (($arquivo["type"]) === "image/png") {
        global $conn;
    
        $query = "INSERT INTO produtos (titulo, preco, img) VALUES ('$titulo','$preco','$img')";
        $mensagem = "Upload feito com sucesso";        
    
        mysqli_query($conn, $query);    
        move_uploaded_file($arquivo["tmp_name"], $localsalvo);
    }

    else{
        $mensagem = "Somente é permitido imagem em PNG";
    }

    
?>

