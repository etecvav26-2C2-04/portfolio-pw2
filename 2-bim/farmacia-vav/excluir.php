<?php
require_once 'config/conexao.php';

$id = $_GET['id'];

$sql = $pdo->prepare("DELETE FROM produtos WHERE id = :id");

$sql->execute([
    ':id' => $id
]);

header("Location: index.php");