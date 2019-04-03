<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Write a Love Letter</title>
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
