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
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="restaurant.css">
	<title>Add Restaurant Form</title>
</head>

<?php

      if(isset($_POST['submit'])) { 

      
        ini_set('display_error', 1);
        error_reporting(E_ALL);
        $restname=$_POST["restname"];
        $address= $_POST["address"];
        $postcode= $_POST["postcode"];
        $description= $_POST["description"];
        
      

        $query = 'INSERT INTO `restaurant` ( `name`, `address`, `postcode`, `description`) VALUES ("'.$restname.'", "'.$address.'", "'.$postcode.'", "'.$description.'" )';
       //var_dump($query);
       //die();
       
        if(performQuery($query)){
          echo "<script>alert('Your data has been addded to database')</script>";
      }else{
          echo "<script>alert('Your data has not been addded to database')</script>";
      }
  }



    ?>



<body>

	<div class="container">
		
		<form class="form" method="post">
			<h1>Add Restaurant</h1>
			
			<input type="text" name="restname" placeholder="Restaurant Name">
			<input type="text" name="address" placeholder="Address">
			<input type="text" name="postcode" placeholder="Postcode">
			<input type="text" name="description" placeholder="Description">

			  <input type="hidden" name="userid" value="<?php echo $_SESSION["user"]["id"]; ?>" />
			
			
			<input type="submit" name="submit" value="Add">

		</form>

	</div>


</body>
</html>