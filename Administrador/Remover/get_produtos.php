<?php
require_once("../../util/db.php");

function get_produtos()
{
    global $conn;
    $query = "SELECT * FROM produtos";
    return $conn->query($query)->fetch_all(MYSQLI_ASSOC); // pega variavel conn do db.php
}
