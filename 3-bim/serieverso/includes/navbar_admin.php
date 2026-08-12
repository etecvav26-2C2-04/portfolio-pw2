<nav class="navbar navbar-expand-lg navbar-dark sv-navbar">

    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="<?= BASE_URL ?>/admin/dashboard.php">
            <img src="<?= BASE_URL ?>/logo/favicon.svg" alt="<?= htmlspecialchars($text['site_name']) ?>" width="28" height="28">
            <?= htmlspecialchars($text['site_name']) ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar"
            aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'dashboard' ? 'active' : '' ?>" href="<?= BASE_URL ?>/admin/dashboard.php">
                        <?= $text['dashboard'] ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'series' ? 'active' : '' ?>" href="<?= BASE_URL ?>/admin/series/index.php">
                        <?= $text['series'] ?>
                    </a>
                </li>

            </ul>

            <div class="d-flex align-items-center gap-2 flex-wrap">

                <a href="?lang=pt-br" class="btn btn-sm btn-outline-light">PT</a>
                <a href="?lang=en-us" class="btn btn-sm btn-outline-light">EN</a>
                <a href="?lang=es" class="btn btn-sm btn-outline-light">ES</a>

                <a href="<?= BASE_URL ?>/admin/logout.php" class="btn btn-sm btn-sv-primary">
                    <?= $text['logout'] ?>
                </a>

            </div>

        </div>

    </div>

</nav>
