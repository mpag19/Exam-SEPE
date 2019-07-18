<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:loginform.php");
}else{
	header("Location:userpage.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="userpage.css">
<title>Home Page</title>
</head>onkeydown="focusNext(event)"
<body>

    <div class="search">
        <form class="search-form" method="post">
        <input type="text" id="search-box" placeholder="Search" value="search">
        <button>Search</button>
        </form>
</div>

<nav>
	<ul>
		<li> <a href="#">Home</a> </li>
		<li> <a href="loginform.php">Log In</a> </li>
		<li> <a href="signuppage.php"> Sign Up</a></li>
	</ul>
</nav>

<div class="container">
	
	<div class="gallery">
		<img src="images/bedroom-door-entrance-271639.jpg" >
			<div class="desc">
				Add a description to image here
			</div>
	</div>

	<div class="gallery">
		<img src="images/bedroom-door-entrance-271639.jpg" >
			<div class="desc">
				Add a description to image here
			</div>
	</div>

	<div class="gallery">
		<a><img src="images/bedroom-door-entrance-271639.jpg" alt="open-door"></a>
			<div class="desc">
				Add a description to image here
			</div>
	</div>

	<div class="gallery">
		<img src="images/bedroom-door-entrance-271639.jpg" >
			<div class="desc">
				Add a description to image here
			</div>
	</div>

	<div class="gallery">
		<img src="images/bedroom-door-entrance-271639.jpg" >
			<div class="desc">
				Add a description to image here
			</div>
	</div>

	<div class="gallery">
		<img src="images/bedroom-door-entrance-271639.jpg">
			<div class="desc">
				Add a description to image here
			</div>
	</div>


</div>
</body>
</html>
