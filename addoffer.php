<?php
    session_start();
    include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add offer</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="addowner.css">

</head>

<?php

      if(isset($_POST['submit'])) { 

      
        ini_set('display_error', 1);
        error_reporting(E_ALL);
        $offername=$_POST["offername"];
        $description= $_POST["description"];
        $validFrom= $_POST['validFrom'];
        $validTo= $_POST['validTo'];
        

        $query = 'INSERT INTO `offer` (`restid`,`offerName`, `description`, `validFrom`, `validTo`) VALUES ("1", "'.$offername.'", "'.$description.'", "'.$validFrom.'", "'.$validTo.'" )'; 
        //var_dump($query);
        //die();
       
        if(performQuery($query)){
          echo "<script>alert('New offer has been added. Thank you.')</script>";
      }else{
          echo "<script>alert('Unknown error occured.')</script>";
      }
  }

    ?>


<body>

	<div class="container">

		

		<form class="form" method="post">
			<h1>Add Offer</h1>

			<input type="text" name="offername" placeholder="Offer name">
			<input type="text" name="description" placeholder="Description">
			<input type="date" name="validFrom" placeholder="Valid From">
			<input type="date" name="validTo" placeholder="Valid To">

			  <input type="hidden" name="owner_id" value="<?php echo $_SESSION["user"]["id"]; ?>" />

			<input type="submit" name="submit" value="Add">

			  <a href="loginform.php">Go back to login page</a> <br>



			
		</form>
		
	</div>


</body>
</html>