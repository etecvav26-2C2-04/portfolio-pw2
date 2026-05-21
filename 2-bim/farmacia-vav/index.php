<?php
require_once 'config/conexao.php';
require_once 'includes/header.php';

$sql = $pdo->prepare("SELECT * FROM produtos");
$sql->execute();

$produtos = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Produtos</h2>

<div class="cards">

<?php foreach($produtos as $produto): ?>
