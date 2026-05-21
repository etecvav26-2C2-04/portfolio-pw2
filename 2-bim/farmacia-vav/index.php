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

<div class="card">
    <h3><?= $produto['nome'] ?></h3>

    <p><strong>Fabricante:</strong>
    <?= $produto['fabricante'] ?></p>

    <p><strong>Preço:</strong>
    R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>

    <p><strong>Estoque:</strong>
    <?= $produto['estoque'] ?></p>

    <div class="acoes">
        <a href="editar.php?id=<?= $produto['id'] ?>">Editar</a>

        <a href="excluir.php?id=<?= $produto['id'] ?>"
           onclick="return confirm('Deseja excluir?')">
           Excluir
        </a>
    </div>
</div>

<?php endforeach; ?>

</div>

<?php require_once 'includes/footer.php'; ?>
