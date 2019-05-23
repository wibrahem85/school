<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{


require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'altharwatschool@gmail.com';                 // SMTP username
$mail->Password = 'Altharwat_School1999';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['email'],$_POST['name'] );
$mail->addAddress('prog.basma1@gmail.com', 'basma');     // Add a recipient
$mail->addAddress($_POST['email']);               // Name is optional
$mail->addReplyTo($_POST['email'], 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['body'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}



	
}



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>

    <style type="text/css">
        .container {
            max-width: 500px;
            padding: 2em;

            margin: auto;
            margin-top: 2em;
            border: 1px solid #ccc;




        }

        form {
            margin: auto;


        }

        form h1 {
            text-align: center;
            color: gray;
            font-family: 'Georgia';
            font-weight: 700;

        }

        form .form-group input,
        textarea {

            margin-bottom: 0.6em;
        }

        form .alert-danger {

            display: none;
        }

    </style>

</head>

<body>


    <div class="container">
        <form action="contactus.php" method="post">
            <h1> contact us </h1>
            <div class="form-group">
                <label for="exampleInputUser">Your name</label>
                <input type="text" class="form-control" id="exampleInputUser" name="name" placeholder="Enter your name">

                <div class="alert alert-danger" role="alert" id="alertuser">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter vaild email">

                    <div class="alert alert-danger" role="alert" id="alertmail">

                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleInputEmail">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">

                    <div class="alert alert-danger" role="alert" id="alertsub">

                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleInputphone">your message</label>
                    <textarea class="form-control" id="exampleInputmessage" name="body" placeholder="leave your message"></textarea>
                    <div class="alert alert-danger" role="alert" id="alertmessage">

                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>


    </script>
</body>

</html>
