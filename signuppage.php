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
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="create.css">
	<title>Sign Up Form</title>
</head>

<?php

      if(isset($_POST['signup'])) { 
      	require 'mail\phpmailer\PHPMailerAutoload.php';
        PHPMailerAutoload('PHPMailer');
      	PHPMailerAutoload('SMTP');
        require 'credential.php';


$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;           // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('EMAIL', 'Somesh');
$mail->addAddress($_POST['email']);     // Add a recipient
$mail->addReplyTo(EMAIL);


//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

      
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
			<h1>Sign Up Form</h1>
			
			<input type="text" name="firstname" placeholder="First name">
			<input type="text" name="lastname" placeholder="Last name">
			<input type="email" name="email" placeholder="Email">
			
			<div class="select">

			<select name="user-type" type="" id="selectUser" class="form-control" required>
		  	<option value="customer">Customer</option>
		  	<option value="sales-person">Sales Person</option>
		  	<option value="restaurant-owner">Restaurant Owner</option>
		    </select> <br>

		    </div>
			
			<input type="password" name="password" placeholder="Password">
			
			<input type="submit" name="signup" value="signup">

			<p>Already have an account? <a href="loginform.php">Log in here</a> </p>
		</form>

	</div>

	


</body>
</html>