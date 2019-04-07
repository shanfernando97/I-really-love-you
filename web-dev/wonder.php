<!DOCTYPE html>
<html>
<head>
	<title>Wonder</title>
	<link rel="icon" href="image/favicon.ico" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<nav  class="navbar navbar-light ">
  		<a class="navbar-brand" href="write.php">
  			<img src="image/titlewithe.png" width="70" height="40" alt="I really love you">
  		</a>
		<ul class="nav justify-content-end">
			<li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="write.php">Write</a></li>
			<li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="wonder.php">Wonder</a></li>
			<li  class="nav-item"><a class="nav-link btn btn-outline-primary" href="index.php">Fun Stuff</a></li>
		</ul>
		</nav>
	</header>

	<img class="serch-image"src="image/search.svg" width="50%" alt="search">
	<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="White his/her name" required />
		<input type="submit" name="" id ="insertBtn" value="Find out">
	</form>

</body>
<!-- <script src="main.js" charset="utf-8"></script> -->
</html>
