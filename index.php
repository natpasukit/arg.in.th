<?php
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/php/monolog_global.php';
  require_once __DIR__ . '/php/db_connection.php';
  require_once __DIR__ . '/php/db_ip_connection.php';
  $usrcountrycode = NULL;
  if($usrcountrycode == "TH" && !isset($_GET['lang'])){
    header("Location:/pages/locales/th/index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website of ARG teamwork">
  <meta name="author" content="natpaphon sukitpaneenit">
  <meta name="Keywords" content="csgo, csgoserver, เซิฟ csgo, เซิฟเกม, communityserver, dedicated server">

    <title>ARG - The house of gamer</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="./resource/css/bootstrap.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="./resource/css/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./resource/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="./resource/css/creative.css" type="text/css">
</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ARG - The gaming community by gamer</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="/pages/document.php?lang=en">Document</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/pages/login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
      <div class="video-container">
          <video id="video-bg-elem" preload="auto" autoplay loop muted>
              <source src="./resource/vid/test.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
          </video>
      </div>
      <div class="header-content">
        <div class="header-content-inner">
          <!-- <img class="img-responsive" src="img/logo.gif"> -->
          <h3>Work Play Train and Be Competitive</h3>
          <hr>
          <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
      </div>
      <a class="page-scroll" href="#about"><i class="fa fa-angle-down animated pulse infinite fa-5x down "></i></a>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">CSGO server and development by Gamer community</h2>
                    <p class="black">Train Hard Play Hard</p>
                    <hr class="light">
                    <p class="text-faded">Would like to open csgo server or need game server for practice , competitive , community ? <br> Contact Us !</p>
                    <a href="#services" class="btn btn-default btn-xl page-scroll">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Services</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                    <h3>Competitive Practice</h3>
                    <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                    <ul>
                      <li class="text-muted">5 vs 5 + 2 observer on 128 tickrate server</li>
                      <li class="text-muted">300 THB /Month</li>
                      <li class="text-muted">150 THB /Week</li>
                  </ul>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                    <h3>Community Server</h3>
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <ul>
                      <li class="text-muted">Server based on requirement ! Anyone want Zombie server ?</li>
                      <li class="text-muted">40 THB / Slot / Month</li>
                      <li class="text-muted">Atleast 10 slot</li>
                  </ul>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                    <h3>Tournament Package</h3>
                    <i class="fa fa-trophy fa-5x" aria-hidden="true"></i>
                    <ul>
                      <li class="text-muted">Would like to have tournament set up and ready to go ?</li>
                      <li class="text-muted">300 THB / Server /Month</li>
                      <li class="text-muted">150 THB / Server /Week</li>
                    </ul>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                    <h3>Admin Support</h3>
                    <i class="fa fa-user-secret fa-5x" aria-hidden="true"></i>
                    <ul>
                      <li class="text-muted">Want to have admin monitor on tournament day ? No problem</li>
                      <li class="text-muted">Online / Offline support</li>
                      <li class="text-muted">Please contact us</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="row">
                <div>
                  <!--<img class="img-responsive center-block" src="img\howtouse.jpg">-->
                </div>
              </div>
            </div>
          </section>

          <section  id="contact" class="bg-primary">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <h2 class="section-heading">Let's Get In Touch!</h2>
                  <hr class="primary">
                  <p>ARG - Teamwork</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                     <p>085 0342761</p>
                     <p>Em@il : natpasukit@gmail.com</p>
                     <p><a href="https://www.facebook.com/argamings/" class="btn">Facebook<a></p>
                     <p><a href="/pages/login.php" class="btn btn-default btn-xl page-scroll">Existing User ?<br> Login<a></p>
                </div>
            </div>
          </div>

        </section>
        <section id="footer">
            <div class="container-footer">
              <div class="i18n">
                <a href="/pages/locales/th/index.php">TH - ไทย</a>
                <a href="./index.php?lang=en">EN - English</a>
              </div>
              <div class="copyright">
                © 2017 ARG ALL RIGHTS RESERVED
              </div>

            </div>
        </section>
    <!-- jQuery -->
    <script src="./resource/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./resource/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="./resource/js/jquery.easing.min.js"></script>
    <script src="./resource/js/jquery.fittext.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="./resource/js/creative.js"></script>
</body>
</html>
