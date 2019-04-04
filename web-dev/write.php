<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Write a Love Letter</title>
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

    <form id="letter">
  		<fieldset>
        Dear, <input id="name" type="text" name="name" placeholder="Their name" required /><br>
    		<!-- <input id="content" type="textbox" name="content" placeholder="Your love letter" required/><br> -->
        <textarea id="content" name="content" form="letter" rows="8" cols="80" placeholder="Your love letter (max.250)" maxlength="250" required></textarea><br>
        <input type="submit" id="insertBtn" value="Post">
      </fieldset>
  	</form>

    <script src="main.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>
