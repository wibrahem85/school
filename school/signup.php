<?php

	if($_SERVER['REQUEST_METHOD']=='POST')
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

	    	  
	    $username=$_POST['username'];
	    $email=$_POST['email'];
	    $password=md5($_POST['password']);
	    $mobile=$_POST['mobile'];
	    

	    $stmt = $conn->prepare("INSERT INTO students (name, email, password,mobile) 
	    VALUES (:name, :email, :password, :mobile)");
	    $stmt->bindParam(':name', $username);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':password', $password);
	    $stmt->bindParam(':mobile', $mobile);
	    
	    $stmt->execute();

	    
	    
	    header("location:signin.php");
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
        form {
            width: 60%;
            margin: auto;

        }

        form h1 {
            text-align: center;
            color: gray;
        }

        .alert {

            display: none;
        }

    </style>
</head>

<body>
    <div class="container">



        <form id="regiseration" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <h1>حساب جديد</h1>
            <div class="form-group">
                <label for="username">الاسم</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="ادخل الاسم" name="username">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertusername">
                    <strong>error</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


            </div>
            <div class="form-group">
                <label for="useremail"> الايميل</label>
                <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="ادخل الايميل" name="email">

                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertemail">
                    <strong>error</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>



            <div class="form-group">
                <label for="userpassword"> كلمة السر</label>
                <input type="password" class="form-control" id="userpassword" placeholder="ادخل كلمة السر" name="password">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertpassword">
                    <strong>error</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>







            <div class="form-group">
                <label for="usermobile">الموبايل</label>
                <input type="text" class="form-control" id="usermobile" placeholder="ادخل الموبايل" name="mobile">

                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertmobile">
                    <strong>error</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>



            <button type="submit" class="btn btn-primary">موافق</button>
        </form>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script src="script.js">

    </script>

</body>

</html>
