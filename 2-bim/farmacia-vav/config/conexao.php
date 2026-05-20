<?php

$host = "localhost";
$banco = "farmacia_vav";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $erro) {
    echo "Erro na conexão: " . $erro->getMessage();
}