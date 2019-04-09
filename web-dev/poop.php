<?php
//receive values user submitted from form
$letterID = $_POST['letterID'];
$poops = $_POST['poops'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `poops` (`id`, `letterID`)
                        VALUES (NULL,'$letterID'); ");

$stmt2 = $pdo->prepare("UPDATE `letters` SET `poop` = '$poops'+1 WHERE `id` = '$letterID'");

$stmt->execute();
$stmt2->execute();
?>
