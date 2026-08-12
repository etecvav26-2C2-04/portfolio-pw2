<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/app.php';

$lang = $_SESSION['lang'] ?? 'pt-br';

if (isset($_GET['lang'])) {
    $allowedLanguages = ['pt-br', 'en-us', 'es'];

    if (in_array($_GET['lang'], $allowedLanguages)) {
        $_SESSION['lang'] = $_GET['lang'];
        $lang = $_GET['lang'];
    }
}

require_once __DIR__ . '/../lang/' . $lang . '.php';

$pageTitle = $pageTitle ?? $text['site_name'];
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> — <?= htmlspecialchars($text['site_name']) ?></title>

    <link rel="icon" type="image/svg+xml" href="<?= BASE_URL ?>/logo/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
