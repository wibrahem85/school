<?php

if ( isset( $_POST['submit'] ) )
 {
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "school";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $conn->query("SET NAMES 'UTF8'");
        
	  $email=($_POST['email']);

	   $stmt = $conn->prepare("SELECT * FROM `students` WHERE email=?");
	  
	   
	 
	    
	    $stmt->execute([$email]);
	    $user=$stmt->fetch();
	    if($user)
	    {
	    	
	    	 if($_POST['password']==$_POST['cpassword'])
	    	 {

	    	 	  $stmt2 = $conn->prepare("UPDATE `students` SET `password` =:pass WHERE email =:mail");

	    	 	  $newpass=md5($_POST['password']);
	    	 	  $stmt2->bindParam(':pass',$newpass);
	    	 	   $stmt2->bindParam(':mail',$email);
	    	 	   $stmt2->execute();
	    	 	   
	    	 	   header("location:signin.php");
	
	    	 }
	    	 else{
	    	 	echo "كلمة السر غير متطابقه";
	    	 }
	    }
	    else{
	    	echo "الايميل غير موجود من فضلك انشىء حساب جديد";
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
    <link rel="stylesheet" href="css_form/bootstrap.min.css">




    <style type="text/css">
        h2 {
            text-align: center;
            margin-top: 1em;
        }

        form {
            max-width: 500px;
            margin: auto;



        }

    </style>
</head>

<body>

    <div class="container">
        <h2>تغير كلمة السر</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">الايميل:</label>
                <input type="email" class="form-control" id="email" placeholder="ادخل الايميل" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">كلمة السر:</label>
                <input type="password" class="form-control" id="pwdn" placeholder="كلمة سر جديده" name="password">
            </div>
            <div class="form-group">
                <label for="pwd">تأكيد كلمة السر</label>
                <input type="password" class="form-control" id="pwdc" placeholder="تـأكيد كلمة السر" name="cpassword">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">تغير كلمة السر</button>
        </form>
    </div>



    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
