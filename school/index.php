<?php

session_start();


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

</head>

<body>
    <header>
        <div class="loading-overlay">
            <div class="lds-hourglass"></div>
        </div>
        <!-- start top -->
        </div><button id="myBtn1" onclick="topFunction()" style="display: block;" title="Go to top">Top</button>

        <div class="navbar navbar-fixed-top default" id="topnav">
            <div class="navbar-inner">
                <div class="container">

                    <a href="index.html" style="float:left"><img alt="" src="img/logo.png"></a>
                    <p style="display:inline;color:white;position:absolute;top:50px;margin-left:10px;font-size:30px;font-weight:bold;s">T N S</p>



                    <div class="navigation">
                        <nav>
                            <ul class="nav pull-right">

                                <li class="current">
                                    <a href="#featured">الصفحه الرئيسيه</a>
                                </li>
                                <li>
                                    <a href="#aboutus">عن مدرستنا</a>

                                <li>
                                    <a href="#works">القسم الاعلامي</a>
                                </li>
                                <li>
                                    <a href="#contactus">تواصل معنا</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <?php
                                        if(isset($_SESSION['username'])):
                                        ?> <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $_SESSION['username']?> مرحبا </a>

                                    <div class="dropdown-menu" style=" color:white;background-color:#666">

                                        <a class="dropdown-item" href="changepassword.php">تغير كلمة السر</a>

                                        <a class="dropdown-item" href="signout.php">تسجيل الخروج</a>


                                    </div>


                                    <?php
                                        else:
                                        ?> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تسجيل الدخول
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color:white;background-color:#666">

                                        <a class="dropdown-item" href="signin.php">تسجيل الدخول</a>
                                        <a class="dropdown-item" href="changepassword.php">تغير كلمة السر</a>

                                        <a class="dropdown-item" href="signout.php">تسجيل الخروج</a>


                                    </div>

                                    <?php
			                         endif;
			                         ?>
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
        </div><!-- end top -->
    </header><!-- Start Section Tool Box -->
    <!-- End Section Tool Box -->
    <!-- section featured -->
    <section id="featured">
        <!-- sequence slider -->
        <div id="sequence-theme">
            <img alt="Previous" class="prev" src="img/bt-prev.png" style="display: inline;"> <img alt="Next" class="next" src="img/bt-next.png" style="display: inline;">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="sequence">

                            <h4 style="color:white;font-size:70px;font-weight:italic;font-family:Adobe Arabic" class="wow fadeInUp" data-offset="300" data-wow-delay=".4s" data-wow-duration="3s">مرحبا بكم في مدرسة الثروات الوطنيه الخاصة </h4>
                            <ul style="width: 100%; height: 100%; position: relative;">
                                <li class="animate-out" style="display: list-item; transition-duration: 0s; transition-delay: 0s; width: 100%; height: 100%; position: absolute; z-index: 1;">
                                    <div class="info letter-container" style="">
                                    </div>
                                    <div class="bottomup" style=""><img alt="" src="img/slider/parallax/1.JPG"></div>
                                </li>
                                <li class="animate-in" style="display: list-item; transition-duration: 0s; transition-delay: 0s; width: 100%; height: 100%; position: absolute; z-index: 1;">
                                    <div class="info letter-container" style="">
                                    </div>
                                    <div class="lefttop" style=""><img alt="" src="img/slider/parallax/2.JPG"></div>
                                </li>
                                <li class="animate-out" style="display: list-item; transition-duration: 0s; transition-delay: 0s; width: 100%; height: 100%; position: absolute; z-index: 1;">
                                    <div class="info letter-container" style="">
                                    </div>
                                    <div class="righttop" style=""><img alt="" src="img/slider/parallax/3.JPG"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sequence slider -->
    </section>
    <!-- end featured -->
    <!-- section about-->
    <section class="section" id="aboutus">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="headline">
                        <h3 class="wow fadeInUp" data-offset="300" data-wow-delay=".4s" data-wow-duration="3s"><span>عن مدرستنا</span></h3>
                    </div>
                </div>
            </div>
            <div class="container wow fadeInUp" data-offset="300" data-wow-delay=".4s" data-wow-duration="3s">

                <div style="position:relative"><img src="img/20.jpeg" style="min-width:100%;,min-height:100%">
                    <p style="text-align:justify;font-weight:bold;font-size:30px;font-family:Adobe Arabic;color:white;position:absolute;z-index:2;top:5%;right:35%;font-size:3vw;">تتقدم مدرسة الثروات الوطنيه الخاصة </p>
                    <p style="text-align:justify;font-weight:bold;font-size:30px;font-family:Adobe Arabic;color:white;position:absolute;z-index:2;top:15%;right:10%;font-size:3vw;">بتهنئة طلابها و معلميها و السادة اولياء الامور بارتقاء المدرسة و مرور 20 عاما علي تأسيسها </p>

                </div>

            </div>



        </div>
    </section>
    <!-- Section about -->
    <!-- section services -->
    <section class="section parallax" id="services">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="headline">
                        <h3 style="font-family:Adobe Arabic" class="wow fadeInDown" data-offset="300" data-wow-delay="1.2s" data-wow-duration="3s"><span>رؤيتنا و رسالتنا </span></h3>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="vision col-lg-6 col-md-4 col-sm-12  wow bounceInLeft" data-offset="300" data-wow-delay="1.2s" data-wow-duration="3s">
                    <div class="container" style="width:70%;height:auto;background-color:white;position:relative;border-radius:3px;margin-bottom:2px;">
                        <i class="icon-circled icon-48" style="float:right;margin-top:10px"><img src="img/eye.png"></i>
                        <h5 class="" style="float:right;font-family:Adobe Arabic;font-weight:bold;font-size:40px;display:inline-block;"> :&nbsp;رؤيتنا &nbsp;</h5>
                        <h5 style="float:right;font-family:Adobe Arabic;font-weight:bold;font-size:40px;display:inline-block;"> . ابناؤنا امل اليوم و ثروة المستقبل&nbsp;</h5>
                        <br>


                    </div>
                </div>
                <br>
                <div class="message col-lg-6 col-md-4 col-sm-12  wow bounceInRight" data-offset="300" data-wow-delay="1.2s" data-wow-duration="3s" style="margin-top:20px;position:relative">
                    <div class="container" style="width:70%;height:auto;background-color:white;position:relative;border-radius:3px;margin-bottom:2px;">
                        <i class="icon-circled icon-48" style="margin-top:10px;float:left"><img src="img/close-envelope.png"></i>
                        <p style="font-family:Adobe Arabic;font-weight:bold;font-size:40px;margin:2px;">&nbsp;رسالتنا</p>
                        <div>
                            <p style="font-weight:bold;font-size:20px;font-family:Adobe Arabic;text-align:center;font-weight:bold"> تسعي مدرسة الثروات الوطنيه الخاصة الي توفير
                                بيئة تربويه تلبي حاجات الطلاب و خدمه المجتمع و تركز علي التمسك بالعادات و التقاليد
                                والاسلامية و احترام التنوع الثقافي لمواكبة تحديات القرن الواحد و العشرين </p>
                        </div>

                    </div>
                </div>



    </section><!-- end section services -->
    </div><!-- section works -->
    <section class="section gray-bg" id="works">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="headline">
                        <h3 class="wow bounceInUp" data-offset="300" data-wow-delay=".4s" data-wow-duration="3s"><span>القسم الاعلامي</span></h3>
                    </div>
                </div>
                <div class="span12">
                    <div class="section-intro">
                        <p class="wow bounceInDown" data-offset="300" data-wow-delay=".4s" data-wow-duration="3s">فعاليات المدرسة</p>
                    </div>
                </div>

                <div class="row">
                    <ul class="portfolio-area">
                        <li class="portfolio-item2 wow rotateInDownLeft" data-offset="300" data-wow-delay=".6s" data-wow-duration="3s" data-id="id-0" data-type="web">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img1.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow rotateInDownLeft" data-offset="300" data-wow-delay=".6s" data-wow-duration="3s" data-id="id-0" data-type="brand">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img2.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow rotateInDownRight" data-offset="300" data-wow-delay=".6s" data-wow-duration="3s" data-id="id-0" data-type="web">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img3.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow rotateInDownRight" data-offset="300" data-wow-delay=".6s" data-wow-duration="3s" data-id="id-0" data-type="graphic">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img4.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow fadeInLeft" data-offset="300" data-wow-delay=".7s" data-wow-duration="3s" data-id="id-0" data-type="ilustrator">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img5.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow fadeInLeft" data-offset="300" data-wow-delay=".7s" data-wow-duration="3s" data-id="id-0" data-type="brand">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img6.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow fadeInRight" data-offset="300" data-wow-delay=".7s" data-wow-duration="3s" data-id="id-0" data-type="photo">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img7.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow fadeInRight" data-offset="300" data-wow-delay=".7s" data-wow-duration="3s" data-id="id-0" data-type="photo">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img8.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow lightSpeedIn" data-offset="300" data-wow-delay=".8s" data-wow-duration="3s" data-id="id-0" data-type="brand">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img9.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow lightSpeedIn" data-offset="300" data-wow-delay=".8s" data-wow-duration="3s" data-id="id-0" data-type="photo">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img10.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow lightSpeedIn" data-offset="300" data-wow-delay=".8s" data-wow-duration="3s" data-id="id-0" data-type="graphic">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img11.jpeg">

                            </div>
                        </li>
                        <li class="portfolio-item2 wow lightSpeedIn" data-offset="300" data-wow-delay=".8s" data-wow-duration="3s" data-id="id-0" data-type="brand">
                            <div class="thumb-wrapp">
                                <img alt="" class="folio-image" src="img/portfolio/img12.jpeg">

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section><!-- section works -->
    <!-- section contact -->
    <section class="section" id="contactus">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="headline">
                        <h3 class=" wow fadeInUp" data-offset="300" data-wow-delay=".5s" data-wow-duration="3s"><span>تواصل معنا</span></h3>
                    </div>
                </div>
                <p style="text-align:center;font-size:30px;"><a href="messagepage.php" id="msg" style="color: #1f97c7;
    text-decoration: none;"> ا تريد ان ترسل رساله لنا ؟</a></p>
            </div>
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4670.945540677754!2d54.64221254489483!3d24.28952750470833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e372ddb92299f%3A0xb696a269da76c9d3!2z2YXYr9ix2LPYqSDYp9mE2KvYsdmI2KfYqg!5e0!3m2!1sen!2seg!4v1555441075048!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen class=" wow fadeInDown" data-offset="300" data-wow-delay=".5s" data-wow-duration="3s"></iframe>

                <div class="columns col-sm-6 col-xs-12 col-lg-4 col-md-6  wow rollIn" data-offset="300" data-wow-delay=".5s" data-wow-duration="3s" style="background-color:#b53f7d9e;height:340px;width:350px;display:inline-block;position:relative;">
                    <i class="fa fa-envelope fa-3x sample-icons" style="position:absolute;top:5%;left:25%;font-size:10rem;color:#deccccde;"></i>
                    <p style="font-size:27px;text-align:center;color:white;position:absolute;top:70%;">altharwatschool@hotmail.com</p>
                </div>
                <div class="columns col-sm-6 col-xs-12 col-lg-4 col-md-6 wow bounceIn" data-offset="300" data-wow-delay="2s" data-wow-duration="3s" style="background-color:#54a79f;height:340px;width:350px;display:inline-block;position:relative;">
                    <i class="fa fa-phone fa-3x sample-icons" style="position:absolute;top:5%;left:25%;font-size:10rem;color:#deccccde;"></i>
                    <p style="font-size:28px;text-align:center;color:white;position:absolute;top:70%;margin-left:8px;">025822533&nbsp;/&nbsp;0555108215</p>
                </div>
                <div class="columns col-sm-12 col-xs-12 col-lg-4 col-md-12  wow rollIn" data-offset="300" data-wow-delay=".5s" data-wow-duration="3s" style="background-color:#4931e591;height:340px;width:350px;display:inline-block;position:relative;">
                    <i class="fas fa-map-marker-alt" style="position:absolute;top:5%;left:25%;font-size:10rem;color:#deccccde;"></i>
                    <p style="font-size:28px;text-align:center;color:white;position:absolute;top:70%;margin-right:5px;"> الإمارات العربية المتحدة، أبوظبي - بني ياس شرق 9</p>
                </div>

            </div>


    </section><!-- end section contact -->
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
