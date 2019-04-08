<?php
//receive values user submitted from form
$letterID = $_POST['letterID'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `letters` (`id`, `letterID`)
                        VALUES (NULL,'$letterID'); ");

$stmt->execute();
?>
