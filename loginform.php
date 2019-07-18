<?php
    session_start(); 
    include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form.css">
	<title>Log In Form</title>
</head>


<body>

	<?php
      
      if(isset($_POST['signin'])){
          $password = md5($_POST['password']);
          $email = $_POST['email'];
          $query = "SELECT * FROM `user` WHERE `email` = '".$email."';";
          $result = fetchAll($query);
          if(count($result) > 0){                            
                foreach($result as $row){
                  if($row['email']==$email&&$row['password']==$password){
                      $_SESSION['login'] = true;
                      $_SESSION['type'] = $row['type'];
                      $_SESSION["user"] = $row;
                      //header('location:ownerpage1.php');
                      if($row['type']=='restaurant-owner') {
                          header("Location: owneroption.php");
                        }elseif($row['type']=='sales-person'){
                            header("Location: salesperson.php");
                        }      
                  }else{
                      echo "<script>alert('Wrong login details.')</script>";
                  }
              }
          }else{
              echo "<script>alert('Error.')</script>";
          }
    }
    ?>


	<div class="container">
		
		<form class="form" method="post">
			<h1>Log In</h1>
			
			<input type="text" name="email" placeholder="Username">
			
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="signin" value="Log in">

		<a href="signuppage.php"> Create an account here </a>

		</form>

	</div>


</body>
</html>