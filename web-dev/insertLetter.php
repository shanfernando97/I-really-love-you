<?php
//receive values user submitted from form
$name = $_POST['name'];
$content = $_POST['content'];

//perform database insert using form values;
$dsn = "mysql:host=dev.fast.sheridanc.on.ca;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `letters` (`id`, `name`,`content`) VALUES (NULL,'$name','$content'); ");

$stmt->execute();
?>
