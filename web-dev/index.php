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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write a Love Letter</title>
    <link rel="icon" href="image/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 640px)" href="css/small.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

  <body>

    <header>

    <nav  class="navbar navbar-light ">
      <a class="navbar-brand" href="index.php">
        <img src="image/titlewithe.png" width="70" height="40" alt="I really love you">
      </a>
    <ul class="nav justify-content-end">
      <li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="index.php">Write</a></li>
      <li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="wonder.php">I Wonder</a></li>
      <li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="pretendToBeFun.html">Fun Stuff</a></li>
    </ul>
    </nav>
    <img class="header-image"src="image/header.svg" width="100%" alt="header">
    <img class="love-image"src="image/titledark.png" width="50%" alt="love you">
  </header>

    <img class="arrowbutton"src="image/arrowdown.svg" width="2%" alt="arrowbutton">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            WRITE YOUR STUFF DOWN
          </div>

        </div>
      </div>
    </div>


    <form id="letter">
  		<fieldset class="form-group">
        Hey, <input id="name" class="exampleFormControlTextarea1" type="text" name="name" placeholder="write his/her name" required /><br>
        I really wanna tell you that<br>
    		<!-- <input id="content" type="textbox" name="content" placeholder="Your love letter" required/><br> -->
        <textarea class="form-control exampleFormControlTextarea1" id="content" name="content" form="letter" rows="8" cols="65" placeholder="Your love letter (max.250)" maxlength="250" required></textarea><br>
        Sincerely, <p><input id="fromName" class="exampleFormControlTextarea1" type="text" name="fromName" placeholder="Write your name (optional)"/></p>
        <input id="insert" type="submit"  class="btn insertBtn" value="Post" data-toggle="modal" data-target="#exampleModal">
      </fieldset>
  	</form>
    <img class="boy-image"src="image/boy.svg"  alt="boy">

    <div class = "showletters">
    	<div class = "letters">
    		<!-- <h4>Love Letters</h4> -->
    		<?php
    		while($row=$stmt->fetch()) {
    		?>
    		<div style="width:300px;height:500px;background:url('image/letterbg.svg')no-repeat;float:left;margin-left:100px;margin-top:25px;position:relative;">
    		<p style="font-size:20px;margin-left:20px;margin-top:20px;font-weight: bold;">Dear, <?php echo($row["name"]) ?></p>
    		<p style="font-size:20px;margin-left:20px;margin-top:20px;font-weight: 400;"><?php echo($row["content"]) ?></p>
    		<p style="font-size:20px;margin-left:20px;margin-top:20px;">- <?php echo($row["fromName"]) ?></p>
    		<div class="letter-stats">

    						<input id="likes" type="number" name="likes" value="<?php echo($row["likes"]) ?>" hidden=true>
    						<input id="poops" type="number" name="poops" value="<?php echo($row["poop"]) ?>" hidden=true>

    						<input data-id="<?php echo($row["id"]) ?>" class="like" style="position:absolute;top: 250px;left: 35px;width:35px;"type="image"style="width:50px;" src="image/like1.svg">
    						<p class="numLikes" id="numLikes" style="position:absolute;top: 260px;left:80px;font-size:20px;"><?php echo($row["likes"]) ?></p>

    						<input data-id="<?php echo($row["id"]) ?>" class="poop" style="position:absolute;top:250px;left: 180px;width:35px;"type="image" style="width:50px;"src="image/poop1.svg">
    						<p class="numPoops" id="numPoops" style="position:absolute;top: 260px;left:225px;font-size:20px;"><?php echo($row["poop"]) ?></p>
    					</div>
    			</div>
    	<?php } ?>
    	</div>
    	</div>

  <script src="js/insert.js" charset="utf-8"></script>
  <script src="js/like.js" charset="utf-8"></script>
  <script src="js/hide-write.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>
