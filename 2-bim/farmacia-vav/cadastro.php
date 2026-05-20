<?php
require_once 'config/conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = $pdo->prepare("
        INSERT INTO produtos
        (nome, fabricante, preco, estoque)
        VALUES
        (:nome, :fabricante, :preco, :estoque)
    ");

   $sql->execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque
    ]);

    header("Location: index.php");
}
