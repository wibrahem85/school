<?php

if ( isset( $_POST['submit'] ) )
 {
$servername = "localhost";
	$username = "admin";
	$password = "admin1";
	$dbname = "basma";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   
	  $email=$_POST['email'];

	   $stmt = $conn->prepare("SELECT * FROM `users` WHERE user_email=?");
	  
	   
	 
	    
	    $stmt->execute([$email]);
	    $user=$stmt->fetch();
	    if($user)
	    {
			
			
			 $stmt2 = $conn->prepare("UPDATE `users` SET `user_password`= :pass WHERE user_email=:mail");

	    	 	  $newpass=md5(123);
	    	 	  $stmt2->bindParam(':pass',$newpass);
	    	 	   $stmt2->bindParam(':mail',$email);
	    	 	   $stmt2->execute();
				   
	    	 	 //  echo"password changed";
				   
				   
	    	$username=$user['user_name'];
			$useremail=$user['user_email'];
			
			
				require 'mailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = '';                 // SMTP username
				$mail->Password = '';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				$mail->setFrom('prog.basma1@gmail.com', 'basma');
				$mail->addAddress($useremail, $username);     // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = 'new password';
				$mail->Body    = ' welcome '.$username.' new password is '.md5(123);
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if(!$mail->send()) {
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					echo 'Message has been sent';
				}

	    	 
	    }
	    else{
	    	echo "email not found in DB , sign up";
	    }
	   
	   
	    }
	catch(PDOException $e)
	    {
	    echo "<br>" . $e->getMessage()."<br>".$e->getLine()  ;
	    }

	$conn = null;

 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  
  
  <style type="text/css">
    h2{
      text-align: center;
      margin-top: 1em;
    }
    form{
      max-width: 500px;
      margin: auto;
	  


    }
	

  </style>
</head>
<body>

<div class="container">
  <h2>press send - then check email for new password</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  
	
   
    <button type="submit" class="btn btn-primary" name="submit">send password</button>
  </form>
</div>



	<script src="js/jquery-3.3.1.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
