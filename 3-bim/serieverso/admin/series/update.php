<?php

require_once '../../includes/auth.php';
require_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$id = (int) ($_POST['series_id'] ?? 0);
$title = trim($_POST['title'] ?? '');
$genre = trim($_POST['genre'] ?? '');
$releaseYear = (int) ($_POST['release_year'] ?? 0);
$seasons = (int) ($_POST['seasons'] ?? 0);
$imdbRating = (float) ($_POST['imdb_rating'] ?? 0);
$synopsis = trim($_POST['synopsis'] ?? '');

$sql = "UPDATE series SET
            title = :title,
            genre = :genre,
            release_year = :release_year,
            seasons = :seasons,
            imdb_rating = :imdb_rating,
            synopsis = :synopsis";

$params = [
    ':title' => $title,
    ':genre' => $genre,
    ':release_year' => $releaseYear,
    ':seasons' => $seasons,
    ':imdb_rating' => $imdbRating,
    ':synopsis' => $synopsis,
    ':id' => $id,
];

if (!empty($_FILES['poster']['name'])) {
    $uploadDir = '../../assets/uploads/series/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $extension = pathinfo($_FILES['poster']['name'], PATHINFO_EXTENSION);
    $posterFile = 'series_' . uniqid() . '.' . $extension;

    move_uploaded_file($_FILES['poster']['tmp_name'], $uploadDir . $posterFile);

    $sql .= ", poster = :poster";
    $params[':poster'] = $posterFile;
}

$sql .= " WHERE series_id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

header('Location: index.php');
exit;
