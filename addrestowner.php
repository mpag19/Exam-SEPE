<?php
    session_start(); 
    include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add restaurant</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="addowner.css">

</head>

    <?php

      if(isset($_POST['add_restaurant_owner'])) { 

        ini_set('display_error', 1);
        error_reporting(E_ALL);
        $firstname=$_POST["firstname"];
        $lastname= $_POST["lastname"];
        $password= md5($_POST["password"]);
        $email= $_POST['email'];
        $name = $firstname." ".$lastname;
        $user_type = $_POST['user-type'];
      

        $query = 'INSERT INTO `user` ( `name`, `email`, `password`, `type`) VALUES ("'.$name.'", "'.$email.'", "'.$password.'", "'.$user_type.'" )';
       //var_dump($query);
       //die();
       
        if(performQuery($query)){
          echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
      }else{
          echo "<script>alert('Unknown error occured.')</script>";
      }
  }



    ?>





<body>

	<div class="container">

		

		<form class="form" method="post">
			<h1>Add Owner</h1>

			<input type="text" name="firstname" placeholder="First name" >
			<input type="text" name="lastname" placeholder="Last name">
			<input type="email" name="email" placeholder="Email" >
			<input type="password" name="password" placeholder="Password">

      <input type="hidden" name="user-type" value="owner">

			<input type="submit" name="add_restaurant_owner" value="submit">

			<a href="loginform.php">Go Back to Login Page</a>

			
		</form>
		
	</div>


</body>
</html>