<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{


require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'altharwatschool20@gmail.com';                 // SMTP username
$mail->Password = 'Altharwat_School1999';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['email'],$_POST['name'] );
$mail->addAddress('altharwatschool20@gmail.com', 'مدرسة الثروات الوطنيه الخاصه');     // Add a recipient
$mail->addAddress('');               // Name is optional
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
 echo ' تم ارسال الرساله بنجاح';
}



	
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>مدرسه الثروات الوطنيه الخاصه</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="مدرسه الروات الوطنيه الخاصه " name="description">
    <meta content="" name="author"><!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/overwrite.css" rel="stylesheet">
    <link href="font/stylesheet.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/sequencejs.css" media="screen" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
  <![endif]-->
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon" sizes="114x114">
    <style>
        #messagebtn {
            background-color: #1f97c7;
            color: white;
            padding: 10px 50px;
            border: none;
            opacity: 0.9;
            border-radius: 30px;
            cursor: pointer;
            margin-right: 27%;
            margin-left: 27%;
            width: auto;
        }

    </style>
</head>

<body>
    <header>

        <!-- start top -->

        <div class="navbar " id="topnav" style="background-color:rgb(47, 48, 64);">
            <div class="navbar-inner" style="background-color:rgb(47, 48, 64);">
                <div class="container">
                    <a href="index.html" style="float:left"><img alt="" src="img/logo.png"></a>
                    <p style="display:inline;color:white;position:absolute;top:50px;margin-left:10px;font-size:30px;font-weight:bold;s">T N S</p>
                    <div class="navigation">
                        <nav>

                            <ul class="nav pull-right">
                                <li>
                                    <a href="index.html">الصفحه الرئيسيه</a>
                                </li>
                                <li>
                                    <a href="index.html">عن مدرستنا</a>

                                <li>
                                    <a href="index.html ">القسم الاعلامي</a>
                                </li>
                                <li>
                                    <a href="index.html">تواصل معنا</a>
                                </li>
                                <li class="current">
                                    <a href="#signin">التسجيل </a>
                                </li>
                                </li>
                                <li>
                                    <a href="train&devolp.html">التطوير و التدريب</a>
                                </li>
                                <li>
                                    <a href="studentcorner.html">ركن الطلاب</a>
                                </li>
                                <li>
                                    <a href="schedule.html">جدول الحصص</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </header>

    <!-- section contact -->
    <div id="sequence">
        <section class="section" id="contactus" style="padding:50px">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="headline">
                            <h3 id="joinus"><span> ارسل لنا رساله </span></h3>
                        </div>
                    </div>
                    <form action="contactus.php" method="post" style="max-width:500px;margin:auto">

                        <div class="input-container">
                            <i class="fa fa-user icon" style="float:right; padding:5px 0px;"></i> <span style="float:right">&nbsp;&nbsp; الاسم &nbsp;&nbsp;</span><span style="float:right"> :</span>
                            <input class="input-field" type="text" placeholder="الاسم" name="name" style="padding:20px;" required>
                        </div>
                        <div class="input-container">
                            <i class="fa fa-envelope icon" style="float:right; padding:5px 0px"> </i><span style="float:right">&nbsp;&nbsp; البريد الالكتروني&nbsp;&nbsp;</span><span style="float:right"> :</span>
                            <input class="input-field" type="text" placeholder="ادخل بريدك الالكتروني" name="email" style="padding:20px;" required>
                        </div>
                        <div class="input-container">
                            <i class="fas fa-phone" style="float:right; padding:5px 0px"> </i><span style="float:right">&nbsp;&nbsp; الهاتف المحمول&nbsp;&nbsp;</span><span style="float:right"> :</span>
                            <input class="input-field" type="text" placeholder="ادخل رفم هاتفك المحمول متبوع  برمز البلد" name="phone" style="padding:20px;" required>
                        </div>
                        <div class="input-container">
                            <span style="float:right">&nbsp;&nbsp; عنوان الرساله &nbsp;&nbsp;</span><span style="float:right"> :</span>
                            <input class="input-field" type="text" placeholder="عنوان الرساله" name="subject" style="padding:20px;" required>
                        </div>
                        <div class="input-container">
                            <span style="float:right">&nbsp;&nbsp; تفاصيل الرساله &nbsp;&nbsp;</span><span style="float:right"> :</span>
                            <textarea rows="5" cols="180" name="body" style="padding:10px 100px;"></textarea>
                        </div>

                        <button id="messagebtn" type="submit"><span style="font-weight:bold;font-size:20px;"> ارسال </span></button>

                    </form>

        </section>
    </div>
    <footer>
        <div class="verybottom">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="aligncenter">
                            <div class="logo">
                                <a class="brand" href="index.html"><img alt="" src="img/logo.png"></a>
                            </div>
                            <p style="font-size:27px;text-align:center;color:white;">visit our page on facebook</p>
                            <div class="social-links">
                                <ul class="social-links">
                                    <li>
                                        <a href="https://www.facebook.com/altharawat/" target="_blank" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a>
                                    </li>
                                </ul>

                                Designed by <a href="#">Sa3d</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Javascript Library Files -->

    <script src="js/jquery-3.3.1.min.js">
    </script>
    <script src="js/jquery.min.js">
    </script>
    <script src="js/jquery.easing.js">
    </script>
    <script src="js/bootstrap.js">
    </script>
    <script src="js/jquery.lettering.js">
    </script>
    <script src="js/parallax/jquery.parallax-1.1.3.js">
    </script>
    <script src="js/nagging-menu.js">
    </script>
    <script src="js/sequence.jquery-min.js">
    </script>
    <script src="js/sequencejs-options.sliding-horizontal-parallax.js">
    </script>
    <script src="js/portfolio/jquery.quicksand.js">
    </script>
    <script src="js/portfolio/setting.js">
    </script>
    <script src="js/jquery.scrollTo.js">
    </script>
    <script src="js/jquery.nav.js">
    </script>
    <script src="js/modernizr.custom.js">
    </script>
    <script src="js/prettyPhoto/jquery.prettyPhoto.js">
    </script>
    <script src="js/prettyPhoto/setting.js">
    </script>
    <script src="js/jquery.flexslider.js">
    </script>
    <script src="js/jquery.nicescroll.min.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script>
        new WOW().init();

    </script>
    <!-- Contact Form JavaScript File -->

    <script src="contactform/contactform.js">
    </script> <!-- Template Custom Javascript File -->

    <script src="js/custom.js">
    </script>

</body>

</html>
