<?php
$currentPage = 'catalog';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
require_once __DIR__ . '/../config/database.php';

$search = trim($_GET['q'] ?? '');
$genre = trim($_GET['genre'] ?? '');

$sql = "SELECT series_id, title, genre, release_year, seasons, imdb_rating, poster FROM series WHERE 1=1";
$params = [];

if ($search !== '') {
    $sql .= " AND title LIKE :search";
    $params[':search'] = '%' . $search . '%';
}

if ($genre !== '') {
    $sql .= " AND genre = :genre";
    $params[':genre'] = $genre;
}

$sql .= " ORDER BY title ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$seriesList = $stmt->fetchAll(PDO::FETCH_ASSOC);

$genresStmt = $pdo->query("SELECT DISTINCT genre FROM series ORDER BY genre ASC");
$genres = $genresStmt->fetchAll(PDO::FETCH_COLUMN);
?>

<main class="container py-4">

    <section class="mb-4">
        <h1 class="fw-bold mb-1"><?= $text['catalog_title'] ?></h1>
        <p class="text-secondary"><?= $text['catalog_subtitle'] ?></p>
    </section>

    <form method="get" class="row g-2 mb-4">
        <div class="col-12 col-md-7">
            <input
                type="text"
                name="q"
                class="form-control"
                placeholder="<?= $text['search_placeholder'] ?>"
                value="<?= htmlspecialchars($search) ?>"
            >
        </div>
        <div class="col-8 col-md-3">
            <select name="genre" class="form-select">
                <option value=""><?= $text['all_genres'] ?></option>
                <?php foreach ($genres as $g): ?>
                    <option value="<?= htmlspecialchars($g) ?>" <?= $genre === $g ? 'selected' : '' ?>>
                        <?= htmlspecialchars($g) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-4 col-md-2">
            <button type="submit" class="btn btn-sv-primary w-100">
                <?= $text['search'] ?>
            </button>
        </div>
    </form>

    <?php if (empty($seriesList)): ?>

        <div class="text-center py-5">
            <p class="text-secondary"><?= $text['no_series_found'] ?></p>
        </div>

    <?php else: ?>

        <div class="row g-4">
            <?php foreach ($seriesList as $serie): ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <article class="card sv-card h-100">
                        <img
                            src="<?= BASE_URL ?>/assets/img/series/<?= htmlspecialchars($serie['poster']) ?>"
                            class="sv-card-poster-sm"
                            alt="<?= htmlspecialchars($serie['title']) ?>"
                        >
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold mb-1"><?= htmlspecialchars($serie['title']) ?></h5>
                            <span class="badge sv-genre-badge align-self-start mb-2">
                                <?= htmlspecialchars($serie['genre']) ?>
                            </span>
                            <p class="small text-secondary mb-2">
                                <?= (int) $serie['release_year'] ?> · <?= (int) $serie['seasons'] ?> <?= $text['seasons_label'] ?>
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

    <?php endif; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
