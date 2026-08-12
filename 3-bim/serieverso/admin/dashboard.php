<?php

$currentPage = 'dashboard';

require_once '../includes/auth.php';
require_once '../includes/header.php';
require_once '../includes/navbar_admin.php';
?>

<main class="container py-4">

    <section class="mb-4">
        <h1 class="fw-bold"><?= $text['dashboard'] ?></h1>
        <p class="text-secondary">
            <?= $text['welcome'] ?>, <?= htmlspecialchars($_SESSION['user']) ?>.
            <?= $text['internal_system'] ?>.
        </p>
    </section>

    <section class="row g-4">

        <div class="col-12 col-md-6">
            <div class="card sv-admin-card h-100">
                <img src="../assets/img/series/breaking-bad.svg" class="card-img-top sv-card-poster-sm" alt="Séries">
                <div class="card-body">
                    <h5 class="card-title"><?= $text['series'] ?></h5>
                    <p class="card-text text-secondary">
                        Gerenciar título, gênero, ano, temporadas, nota e sinopse do catálogo.
                    </p>
                    <a href="series/index.php" class="btn btn-sv-primary">
                        Abrir
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card sv-admin-card h-100">
                <img src="../assets/img/about-cover.svg" class="card-img-top sv-card-poster-sm" alt="Site público">
                <div class="card-body">
                    <h5 class="card-title">Site público</h5>
                    <p class="card-text text-secondary">
                        Ver o catálogo como o visitante vê.
                    </p>
                    <a href="../index.php" class="btn btn-sv-outline">
                        Visualizar
                    </a>
                </div>
            </div>
        </div>

    </section>

</main>

<?php require_once '../includes/footer.php'; ?>
