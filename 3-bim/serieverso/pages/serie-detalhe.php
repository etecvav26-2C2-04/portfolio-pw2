<?php
$currentPage = 'catalog';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
require_once __DIR__ . '/../config/database.php';

$id = (int) ($_GET['id'] ?? 0);

$stmt = $pdo->prepare(
    "SELECT series_id, title, genre, release_year, seasons, imdb_rating, synopsis, poster
     FROM series
     WHERE series_id = :id"
);
$stmt->execute([':id' => $id]);
$serie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<main class="container py-4">

    <a href="<?= BASE_URL ?>/pages/series.php" class="btn btn-sv-outline btn-sm mb-4">
        &larr; <?= $text['back_to_catalog'] ?>
    </a>

    <?php if (!$serie): ?>

        <div class="text-center py-5">
            <p class="text-secondary"><?= $text['no_series_found'] ?></p>
        </div>

    <?php else: ?>

        <section class="row g-4">

            <div class="col-12 col-md-4">
                <img
                    src="<?= BASE_URL ?>/assets/img/series/<?= htmlspecialchars($serie['poster']) ?>"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    alt="<?= htmlspecialchars($serie['title']) ?>"
                >
            </div>

            <div class="col-12 col-md-8">
                <h1 class="fw-bold mb-2"><?= htmlspecialchars($serie['title']) ?></h1>

                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge sv-genre-badge"><?= htmlspecialchars($serie['genre']) ?></span>
                    <span class="badge text-bg-light text-dark"><?= (int) $serie['release_year'] ?></span>
                    <span class="badge text-bg-light text-dark">
                        <?= (int) $serie['seasons'] ?> <?= $text['seasons_label'] ?>
                    </span>
                    <span class="badge sv-rating-badge">
                        ★ <?= number_format($serie['imdb_rating'], 1, ',', '.') ?> <?= $text['rating_label'] ?>
                    </span>
                </div>

                <h5 class="fw-bold mb-2"><?= $text['synopsis_label'] ?></h5>
                <p class="text-secondary"><?= htmlspecialchars($serie['synopsis']) ?></p>
            </div>

        </section>

    <?php endif; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
