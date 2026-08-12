<?php

$currentPage = 'series';

require_once '../../includes/auth.php';
require_once '../../includes/header.php';
require_once '../../includes/navbar_admin.php';
require_once '../../config/database.php';

$sql = "SELECT series_id, title, genre, release_year, seasons, imdb_rating, poster
        FROM series
        ORDER BY title ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$seriesList = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="container py-4">

    <section class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="fw-bold mb-1"><?= $text['series'] ?></h1>
            <p class="text-secondary mb-0">
                <?= $text['series_management'] ?>
            </p>
        </div>

        <a href="create.php" class="btn btn-sv-primary">
            <?= $text['new_series'] ?>
        </a>
    </section>

    <section class="card sv-admin-card">
        <div class="card-body">

            <?php if (empty($seriesList)): ?>

            <div class="text-center py-5">

                <img src="../../assets/img/series/breaking-bad.svg" alt="Séries"
                    class="img-fluid rounded-4 shadow-sm mb-4" style="max-width: 220px;">

                <h3 class="fw-bold mb-3">
                    <?= $text['no_series_found_admin'] ?>
                </h3>

                <p class="text-secondary mb-4">
                    <?= $text['start_series_message'] ?>
                </p>

                <a href="create.php" class="btn btn-sv-primary">
                    <?= $text['new_series'] ?>
                </a>

            </div>

            <?php else: ?>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th><?= $text['image'] ?></th>
                            <th><?= $text['series_name'] ?></th>
                            <th><?= $text['genre_label'] ?></th>
                            <th><?= $text['year_label'] ?></th>
                            <th><?= $text['seasons_label'] ?></th>
                            <th><?= $text['rating_label'] ?></th>
                            <th class="text-end"><?= $text['actions'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($seriesList as $serie): ?>
                            <tr>
                                <td>
                                    <?php if (!empty($serie['poster'])): ?>
                                        <img
                                            src="../../assets/img/series/<?= htmlspecialchars($serie['poster']) ?>"
                                            class="sv-product-thumb"
                                            alt="<?= htmlspecialchars($serie['title']) ?>"
                                        >
                                    <?php else: ?>
                                        <span class="small text-secondary"><?= $text['no_image'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-semibold"><?= htmlspecialchars($serie['title']) ?></td>
                                <td><?= htmlspecialchars($serie['genre']) ?></td>
                                <td><?= (int) $serie['release_year'] ?></td>
                                <td><?= (int) $serie['seasons'] ?></td>
                                <td>
                                    <span class="badge sv-rating-badge">
                                        ★ <?= number_format($serie['imdb_rating'], 1, ',', '.') ?>
                                    </span>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <a href="edit.php?id=<?= $serie['series_id'] ?>" class="btn btn-sm btn-sv-outline">
                                            <?= $text['edit'] ?>
                                        </a>

                                        <a
                                            href="delete.php?id=<?= $serie['series_id'] ?>"
                                            class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('<?= htmlspecialchars($text['confirm_delete'], ENT_QUOTES) ?>');"
                                        >
                                            <?= $text['delete'] ?>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php require_once '../../includes/footer.php'; ?>
