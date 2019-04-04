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
	<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
	body {
  		background-image: url("image/bg.jpg");
  		background-size: 100%;
	}
</style>

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
		<!-- <p>YourName: <?php echo($row["yourName"]) ?></p>  -->

	<?php } ?>
	</div>

</body>
</html>
