<?php $currentPage = $currentPage ?? ''; ?>

<nav class="navbar navbar-expand-lg navbar-dark sv-navbar sticky-top">

    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="<?= BASE_URL ?>/index.php">
            <img src="<?= BASE_URL ?>/logo/favicon.svg" alt="<?= htmlspecialchars($text['site_name']) ?>" width="32" height="32">
            <?= htmlspecialchars($text['site_name']) ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>" href="<?= BASE_URL ?>/index.php">
                        <?= $text['nav_home'] ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'catalog' ? 'active' : '' ?>" href="<?= BASE_URL ?>/pages/series.php">
                        <?= $text['nav_catalog'] ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'about' ? 'active' : '' ?>" href="<?= BASE_URL ?>/pages/sobre.php">
                        <?= $text['nav_about'] ?>
                    </a>
                </li>

            </ul>

            <div class="d-flex align-items-center gap-2 flex-wrap">

                <a href="?lang=pt-br" class="btn btn-sm btn-outline-light">PT</a>
                <a href="?lang=en-us" class="btn btn-sm btn-outline-light">EN</a>
                <a href="?lang=es" class="btn btn-sm btn-outline-light">ES</a>

            </div>

        </div>

    </div>

</nav>
