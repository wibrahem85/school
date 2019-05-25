<?php

if (isset($_POST['submit']))
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

	   
	  $email=$_POST['email'];

	   $stmt = $conn->prepare("SELECT * FROM `students` WHERE email=:email");
	  
	    $stmt->bindParam(':email', $email);
	 
	    
	    $stmt->execute();
	    $user=$stmt->fetch();
	    if($user)
	    {
	     

	    	if(md5($_POST['password']) == $user['password'])
	    	{
                session_start();
	    		$_SESSION['username']=$user['name'];
	    		header("location:index.php");
	    		
	    	}
	    	else{
	    		echo "الايميل موجود ولكن كلمة السر خاطئه";
	    	}


	    	 
	    }
	    else{
	    	echo "الايميل غير موجود من فضلك انشىء حساب جديد";
	    }
	   
	   
	    }
	catch(PDOException $e)
	    {
	    echo "<br>" . $e->getMessage();
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

        form a {

            display: block;
        }

        .form-check {
            display: inline-block;
        }

    </style>
</head>

<body>

    <div class="container">
        <h2>تسجيل الدخول</h2>
        <form action="signin.php" method="post">
            <div class="form-group">
                <label for="email">الايميل</label>
                <input type="email" class="form-control" id="email" placeholder="ادخل الايميل" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">كلمة السر</label>
                <input type="password" class="form-control" id="pwd" placeholder="ادخل كلمة السر" name="password">
            </div>

            <div class="form-group">
                <a href="changepassword.php">نسيت كلمة السر؟</a>
                <a href="signup.php">طالب جديد</a>
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> تذكرنى
                </label>
            </div><br>
            <button type="submit" name='submit' class="btn btn-primary">موافق</button>
        </form>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
