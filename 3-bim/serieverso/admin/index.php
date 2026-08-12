<?php
session_start();

require_once __DIR__ . '/../config/app.php';

$allowedLanguages = ['pt-br', 'en-us', 'es'];

if (isset($_GET['lang']) && in_array($_GET['lang'], $allowedLanguages)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? 'pt-br';

require_once __DIR__ . '/../lang/' . $lang . '.php';

if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Credenciais fixas para a primeira versão didática.
    $validUsername = 'admin';
    $validPassword = '123456';

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['user'] = $username;

        header('Location: dashboard.php');
        exit;
    }

    $errorMessage = $text['invalid_login'];
}
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $text['login'] ?> — <?= htmlspecialchars($text['site_name']) ?></title>

    <link rel="icon" type="image/svg+xml" href="../logo/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body class="sv-login-page">

<main class="container min-vh-100 d-flex align-items-center justify-content-center py-4">

    <section class="row w-100 shadow-lg rounded-4 overflow-hidden sv-login-box">

        <div class="col-12 col-lg-6 p-0">
            <img src="../assets/img/about-cover.svg" class="img-fluid h-100 w-100 sv-login-image" alt="SérieVerso">
        </div>

        <div class="col-12 col-lg-6 bg-transparent p-4 p-md-5">

            <div class="mb-4">
                <h1 class="fw-bold mb-1"><?= htmlspecialchars($text['site_name']) ?></h1>
                <p class="text-secondary mb-0"><?= htmlspecialchars($text['internal_system']) ?></p>
            </div>

            <h2 class="h4 mb-3"><?= $text['login'] ?></h2>

            <?php if (!empty($errorMessage)): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($errorMessage) ?>
                </div>
            <?php endif; ?>

            <form method="post" action="index.php">

                <div class="mb-3">
                    <label for="username" class="form-label">
                        <?= $text['username'] ?>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        <?= $text['password'] ?>
                    </label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-sv-primary w-100">
                    <?= $text['enter'] ?>
                </button>

            </form>

            <hr class="my-4 border-secondary">

            <div class="d-flex justify-content-center gap-2">
                <a href="?lang=pt-br" class="btn btn-sm btn-outline-secondary">PT</a>
                <a href="?lang=en-us" class="btn btn-sm btn-outline-secondary">EN</a>
                <a href="?lang=es" class="btn btn-sm btn-outline-secondary">ES</a>
            </div>

            <p class="small text-secondary text-center mt-4 mb-0">
                Projeto didático · Versão Beta
            </p>

        </div>

    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
