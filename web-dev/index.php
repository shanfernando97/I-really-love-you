<?php
//session_start();
//$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";


$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `letters`");

$stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>I Love You</title>
</head>

<body>
	<header>
		<h2>I Love You</h2>
		<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="write.php">Write</a></li>
			<li><a href="wonder.php">Wonder</a></li>
		</ul>
		</nav>
		<img src=""/>
	</header>

	<div class = "letters">
		<h4>Love Letters</h4>
		<?php
		while($row=$stmt->fetch()) {
		?>
		<p>name: <?php echo($row["name"]) ?></p>
		<p>content: <?php echo($row["content"]) ?></p>
	<?php } ?>
	</div>

</body>
</html>
