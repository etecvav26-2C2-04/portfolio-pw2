<?php
$currentPage = 'contact';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';

$sent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Versão didática: não há envio real de e-mail, apenas validação dos campos.
    if ($name !== '' && $email !== '' && $message !== '') {
        $sent = true;
    }
}
?>

<main class="container py-4">

    <section class="row g-4">

        <div class="col-12 col-md-6">
            <h1 class="fw-bold mb-1"><?= $text['contact_title'] ?></h1>
            <p class="text-secondary mb-4"><?= $text['contact_subtitle'] ?></p>

            <?php if ($sent): ?>
                <div class="alert alert-success"><?= $text['contact_form_success'] ?></div>
            <?php endif; ?>

            <form method="post" action="contato.php">

                <div class="mb-3">
                    <label for="name" class="form-label"><?= $text['contact_form_name'] ?></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><?= $text['contact_form_email'] ?></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label"><?= $text['contact_form_message'] ?></label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-sv-primary">
                    <?= $text['contact_form_send'] ?>
                </button>

            </form>
        </div>

        <div class="col-12 col-md-6">
            <img src="<?= BASE_URL ?>/assets/img/contact-cover.svg" class="img-fluid rounded-4 shadow-sm mb-4" alt="Contato">

            <h6 class="fw-bold mb-2"><?= $text['contact_info_title'] ?></h6>
            <p class="text-secondary mb-1">Rua das Telas, 245 — São Paulo/SP</p>
            <p class="text-secondary mb-1">(11) 4002-8922</p>
            <p class="text-secondary mb-1">contato@serieverso.com.br</p>
            <p class="text-secondary mb-0">Instagram · TikTok · X: @serieverso</p>
        </div>

    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
