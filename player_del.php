<?php

//Adiciona o arquivo de Conexão a esta página
require_once("Connection.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;

if($id) {
    $conn = Connection::getConnection();

    $sql = "DELETE FROM players WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    //Voltar para a página de listagem
    header("location: cadastro.php");
} else {
    echo "ID não informado.";
    echo "<br>";
    echo "<a href='cadastro.php'>Voltar</a>";
}