<?php

$title = $_POST['title'];
$duur = $_POST['duur'];
$datum_van_uitkomst = $_POST['datum_van_uitkomst'];
$land_van_uitkomst = $_POST['land_van_uitkomst'];
$description = $_POST['description'];
$youtube_trailer_id = $_POST['youtube_trailer_id'];

$host = 'localhost';
$dbname = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO movies (title, duur, datum_van_uitkomst, land_van_uitkomst, description, youtube_trailer_id)
VALUES (?, ?, ?, ?, ?, ?);";

$stmt = $pdo->prepare($sql);

$stmt->execute([$title, $duur, $datum_van_uitkomst, $land_van_uitkomst, $description, $youtube_trailer_id]);
