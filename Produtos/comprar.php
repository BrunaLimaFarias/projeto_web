<?php
require_once("../util/db.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produto = $_POST["id_produto"];
    $quantidade = $_POST["quantidade"];

    if (empty($quantidade)) {
        $quantidade = "1";
    }
    // Prepare and execute the INSERT query
    $query = "INSERT INTO carrinho (id_produto, quantidade) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $id_produto, $quantidade);

    if ($stmt->execute()) {
        http_response_code(201);
        $response = array("status" => "success", "message" => "Data inserted successfully.");
    } else {
        // Error response with HTTP status code 400 (Bad Request)
        http_response_code(400);
        $response = array("status" => "error", "message" => "Error: " . $conn->error);
    }

    // Close the prepared statement
    $stmt->close();

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(400);
    echo 'erro metodo não disponível';
}
