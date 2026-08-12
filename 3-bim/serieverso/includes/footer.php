<footer class="sv-footer py-5 mt-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-12 col-md-4">
                <h5 class="fw-bold mb-2"><?= htmlspecialchars($text['site_name']) ?></h5>
                <p class="small text-secondary mb-0"><?= htmlspecialchars($text['site_tagline']) ?></p>
            </div>

            <div class="col-12 col-md-4">
                <h6 class="fw-bold mb-2"><?= $text['contact_info_title'] ?? 'Contato' ?></h6>
                <p class="small text-secondary mb-1">Rua das Telas, 245 — São Paulo/SP</p>
                <p class="small text-secondary mb-1">(11) 4002-8922</p>
                <p class="small text-secondary mb-0">contato@serieverso.com.br</p>
            </div>

            <div class="col-12 col-md-4">
                <h6 class="fw-bold mb-2">Redes sociais</h6>
                <p class="small text-secondary mb-1">Instagram: @serieverso</p>
                <p class="small text-secondary mb-1">TikTok: @serieverso</p>
                <p class="small text-secondary mb-0">X: @serieverso</p>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <small class="text-secondary"><?= $text['footer_rights'] ?></small>
            <a href="<?= BASE_URL ?>/admin/index.php" class="small text-secondary sv-admin-link">
                <?= $text['nav_admin'] ?>
            </a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
