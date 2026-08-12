<?php
$currentPage = 'about';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<main class="container py-4">

    <section class="row align-items-center g-4">

        <div class="col-12 col-md-6">
            <h1 class="fw-bold mb-3"><?= $text['about_title'] ?></h1>
            <p class="text-secondary fs-5"><?= $text['about_text'] ?></p>
        </div>

        <div class="col-12 col-md-6">
            <img src="<?= BASE_URL ?>/assets/img/about-cover.svg" class="img-fluid rounded-4 shadow-sm" alt="SérieVerso">
        </div>

    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
