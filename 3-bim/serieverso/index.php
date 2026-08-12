<?php
$currentPage = 'home';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
require_once __DIR__ . '/config/database.php';

$stmt = $pdo->prepare(
    "SELECT series_id, title, genre, release_year, imdb_rating, poster
     FROM series
     ORDER BY imdb_rating DESC
     LIMIT 4"
);
$stmt->execute();
$featured = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="container py-4">

    <section class="sv-hero text-center mb-5">
        <h1 class="fw-bold mb-3"><?= $text['hero_title'] ?></h1>
        <p class="text-secondary mb-4 fs-5"><?= $text['hero_subtitle'] ?></p>
        <a href="<?= BASE_URL ?>/pages/series.php" class="btn btn-sv-primary btn-lg px-4">
            <?= $text['hero_cta'] ?>
        </a>
    </section>

    <section class="mb-5">
        <h2 class="sv-section-title fw-bold mb-4"><?= $text['featured_title'] ?></h2>

        <div class="row g-4">
            <?php foreach ($featured as $serie): ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <article class="card sv-card h-100">
                        <img
                            src="<?= BASE_URL ?>/assets/img/series/<?= htmlspecialchars($serie['poster']) ?>"
                            class="sv-card-poster"
                            alt="<?= htmlspecialchars($serie['title']) ?>"
                        >
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold mb-1"><?= htmlspecialchars($serie['title']) ?></h5>
                            <p class="small text-secondary mb-2">
                                <?= (int) $serie['release_year'] ?> · <?= htmlspecialchars($serie['genre']) ?>
                            </p>
                            <span class="badge sv-rating-badge align-self-start mb-3">
                                ★ <?= number_format($serie['imdb_rating'], 1, ',', '.') ?>
                            </span>
                            <a href="<?= BASE_URL ?>/pages/serie-detalhe.php?id=<?= $serie['series_id'] ?>"
                                class="btn btn-sv-outline btn-sm mt-auto">
                                <?= $text['view_details'] ?>
                            </a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
