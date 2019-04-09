<?php
//receive values user submitted from form
$name = $_POST['name'];
$content = $_POST['content'];
$fromName = $_POST['fromName'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `letters` (`id`, `name`,`content`,`fromName`, `likes`, `poop`)
                        VALUES (NULL,'$name','$content','$fromName',0,0); ");

$stmt->execute();

echo("Yo");
?>
