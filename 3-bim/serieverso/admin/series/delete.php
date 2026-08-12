<?php

require_once '../../includes/auth.php';
require_once '../../config/database.php';

$id = (int) ($_GET['id'] ?? 0);

if ($id > 0) {
    $stmt = $pdo->prepare("DELETE FROM series WHERE series_id = :id");
    $stmt->execute([':id' => $id]);
}

header('Location: index.php');
exit;
