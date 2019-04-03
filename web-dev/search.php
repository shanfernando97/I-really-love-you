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
