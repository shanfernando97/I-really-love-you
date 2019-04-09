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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

  <body>
    <div >
    <header>

    <nav  class="navbar navbar-light ">
      <a class="navbar-brand" href="write.php">
        <img src="image/titlewithe.png" width="70" height="40" alt="I really love you">
      </a>
    <ul class="nav justify-content-end">
      <li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="write.php">Write</a></li>
      <li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="wonder.php">I Wonder</a></li>
      <li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="index.php">Fun Stuff</a></li>
    </ul>
    </nav>
    <img class="header-image"src="image/header.svg" width="100%" alt="header">
    <img class="love-image"src="image/titledark.png" width="50%" alt="love you">
  </header>

    <form id="letter">
  		<fieldset class="form-group">
        Hey, <input id="name" class="exampleFormControlTextarea1" type="text" name="name" placeholder="write his/her name" required /><br>
        I really wanna tell you that<br>
    		<!-- <input id="content" type="textbox" name="content" placeholder="Your love letter" required/><br> -->
        <textarea class="form-control exampleFormControlTextarea1" id="content" name="content" form="letter" rows="8" cols="80" placeholder="Your love letter (max.250)" maxlength="250" required></textarea><br>
        Sincerely, <p><input id="fromName" class="exampleFormControlTextarea1" type="text" name="fromName" placeholder="Write your name (optional)"/></p>
        <input id="insert" type="submit"  class="btn insertBtn" value="Post">
      </fieldset>
  	</form>
    <img class="boy-image"src="image/boy.svg"  alt="boy">




    <script src="js/insert.js" type="text/javascript" charset="utf-8"></script>
  </div>
  </body>
</html>
