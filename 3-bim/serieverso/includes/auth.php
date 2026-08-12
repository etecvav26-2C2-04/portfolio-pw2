<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/app.php';

if (!isset($_SESSION['user'])) {
    header('Location: ' . BASE_URL . '/admin/index.php');
    exit;
}
