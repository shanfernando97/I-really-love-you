<?php
$search = $_POST['search'];


$dsn = "mysql:host=localhost;dbname=mcphesto_iloveyou;charset=utf8mb4";
$dbusername = "mcphesto_imm";
$dbpassword = "nhXZ9reEzWuQ";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


//	$stmt1 = $pdo->prepare("SELECT * FROM `chefs` WHERE `userID` = $id");
	$stmt = $pdo->prepare("SELECT * FROM `letters` WHERE `name` LIKE '%$search%'");
  $stmt2 = $pdo->prepare("SELECT COUNT(`name`) FROM `letters` WHERE `name` LIKE '%$search%'");
  $stmt3 = $pdo->prepare("SELECT * FROM `letters` WHERE `name` LIKE '%$search%'");

  $stmt->execute();
  $stmt2->execute();
  $stmt3->execute();
?>

<!DOCTYPE html>
<html>
<head>
  <title>search page</title>

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
<section>
  <h1>Aww, sure..</h1>
  <?php $count=$stmt2->fetch();
   $name=$stmt->fetch(); ?>
  <p>There is/are <h3><?php echo($count[0]) ?></h3> love letter(s) for <h3><?php echo($name["name"]) ?></h3></p>
</section>

<section>
  <?php
  while($row=$stmt3->fetch()) {
  ?>
  <p>name: <?php echo($row["name"]) ?></p>
  <p>content: <?php echo($row["content"]) ?></p>
<?php } ?>
</section>
</body>
</html>

