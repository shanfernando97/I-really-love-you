<?php
//receive values user submitted from form
$letterID = $_POST['letterID'];
$likes = $_POST['likes'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `likes` (`id`, `letterID`)
                        VALUES (NULL,'$letterID'); ");

$stmt2 = $pdo->prepare("UPDATE `letters` SET `likes` = '$likes'+1 WHERE `id` = '$letterID'");

$stmt->execute();
$stmt2->execute();
?>
