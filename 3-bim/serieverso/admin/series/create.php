<?php

$currentPage = 'series';

require_once '../../includes/auth.php';
require_once '../../includes/header.php';
require_once '../../includes/navbar_admin.php';
?>

<main class="container py-4">

    <section class="mb-4">
        <h1 class="fw-bold mb-1"><?= $text['new_series'] ?></h1>
        <p class="text-secondary mb-0"><?= $text['create_series_message'] ?></p>
    </section>

    <section class="card sv-admin-card">
        <div class="card-body p-4">

            <form method="post" action="store.php" enctype="multipart/form-data">

                <div class="row g-3">

                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label"><?= $text['series_name'] ?></label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="genre" class="form-label"><?= $text['genre_label'] ?></label>
                        <input type="text" class="form-control" id="genre" name="genre" required>
                    </div>

                    <div class="col-6 col-md-4">
                        <label for="release_year" class="form-label"><?= $text['year_label'] ?></label>
                        <input type="number" class="form-control" id="release_year" name="release_year" min="1928" max="2100" required>
                    </div>

                    <div class="col-6 col-md-4">
                        <label for="seasons" class="form-label"><?= $text['seasons_label'] ?></label>
                        <input type="number" class="form-control" id="seasons" name="seasons" min="1" required>
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="imdb_rating" class="form-label"><?= $text['rating_label'] ?></label>
                        <input type="number" step="0.1" min="0" max="10" class="form-control" id="imdb_rating" name="imdb_rating" required>
                    </div>

                    <div class="col-12">
                        <label for="synopsis" class="form-label"><?= $text['synopsis_label'] ?></label>
                        <textarea class="form-control" id="synopsis" name="synopsis" rows="4" required></textarea>
                    </div>

                    <div class="col-12">
                        <label for="poster" class="form-label"><?= $text['poster_image'] ?></label>
                        <input type="file" class="form-control" id="poster" name="poster" accept="image/*,.svg">
                        <div class="form-text text-secondary"><?= $text['image_help'] ?></div>
                    </div>

                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-sv-primary"><?= $text['save'] ?></button>
                    <a href="index.php" class="btn btn-sv-outline"><?= $text['cancel'] ?></a>
                </div>

            </form>

        </div>
    </section>

</main>

<?php require_once '../../includes/footer.php'; ?>
