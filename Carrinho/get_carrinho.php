
<?php
require_once("../util/db.php");

function get_carrinho()
{
    global $conn;
    $query = "SELECT * FROM carrinho";
    return $conn->query($query)->fetch_all(MYSQLI_ASSOC); // pega variavel conn do db.php
}
