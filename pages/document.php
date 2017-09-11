<?php
  require_once __DIR__ . '/../php/db_ip_connection.php';
  if($usrcountrycode == "TH" && !isset($_GET['lang'])){
    header("Location:/locales/th/document.php");
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
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link rel="stylesheet" href="../resource/css/font-awesome/css/font-awesome.min.css" type="text/css">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="../resource/css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../resource/css/document.css" type="text/css">
  </head>
  <body>
    <div class="main-container">
    <div class="left-menu">
        <a href="http://www.arg.in.th"><img src="../resource/img/logo.png" class="logo"></img></a>
        <a href="#" class="active menubar" id="content1">Why open server with us</a>
        <a href="#" class="menubar" id="content2">Our Services</a>
        <a href="#" class="menubar" id="content3">How to open server</a>
        <a href="#" class="menubar" id="content4">Server Document</a>
    </div>
    <div class="content">
      <div class="content-header">
        ARG Document
      </div>

      <div class="content-body show content1">
        <h3> A little bit introduce about us. </h3>
        With many years of community server we have bunch of experience with game server and know how to manage with problem.
        We are one stop service that you don't need to have any prior experience and knowledge with game server.
      </div>
      <div class="content-body content2">
        <h3> What we offer</h3>
        We offer good server in reasonable price. We also offer service in development area such as website , API , SaaS.
        Please contact us !
        As for csgo or other game , We could making server on demand with mod , plugin don't hesitate to contact us.
      </div>
      <div class="content-body content3">
        <h3> Let's open server</h3>
          Currently , Please contact our team via facebook or Email and follow instruction. You need to prepare some information before opening server. Server name , password , Steam_id / Steam_profile for creating server.
      </div>
      <div class="content-body content4">
        <h1> Server documentation </h1>
        <h3> Connecting to server </h3>
        <p> After you got an IP from us you can connecting directly into server by console command , steam protocol and steam community server </p>
        <ul>
          <li>Console connecting connect ip:port; password xxxx; -- example connect arp.com:22111;password 1234;</li>
          <li>Steam protocol via webbrowser steam://connect/ip:port -- example steam://connect/arp.com:22111</li>
        </ul>
        <h3> Admin System </h3>
        <p> You can manage your server with ingame command using !admin /!sm_admin </p>
        <p> In this command you will see many section for use </p>
        <p><img src="../resource/img/howto1.jpg"></p>
        <p> The mainly use that will mention here is number 2 </p>
        <p><img src="../resource/img/howto2.jpg"></p>
        <p> You can select map here in number 1 </p>
        <h3> RCON and Temp config </h3>
        <p> You can temporary config your server which will effect until the server restart </p>
        <p> By typing !sm_rcon value -- example !sm_rcon mp_freezetime 5</p>
        <p><img src="../resource/img/howto3.jpg"></p>
        <h3> Practices Mode </h3>
        <p> You can practices your bomb throwing using practice mode </p>
        <p> By typing !prac to open and !warmup to close </p>
        <p><img src="../resource/img/howto4.jpg"></p>
        <p> The command that you would find useful in this mode </p>
        <ul>
          <li>noclip</li>
        </ul>
        <h3> Normal play & Veto </h3>
        <p> Normally you can wait every one to type .r to ready</p>
        <p> But you can also force the game to start with !fs to play when player is lower than 10 </p>
        <p> You can use vetobo 1 by typing !veto </p>
        <p> The command that you would find useful in this mode </p>
        <ul>
          <li>!veto -- start veto</li>
          <li>!fs , !fe -- start and stop match </li>
          <li>!pause , !unpause -- pause and unpause </li>
        </ul>
        <h3> Have any more question on how 2 use ? Contact us ! </h3>
      </div>
    </div>
    <div class="footer">
      <div class="footer-left copyright">
        <p>© 2017 ARG ALL RIGHTS RESERVED</p>
      </div>
      <div class="footer-right i18n">
        <p><a href="./locales/th/document.php">TH - ไทย</a>
        <a href="./document.php?lang=en">EN - English</a><p>
      </div>
    </div>
    </div>
  </body>
  <!-- jQuery -->
  <script src="../resource/js/jquery.js"></script>
  <script>
  $(document).ready(function(){
    // Set document header
    var contentHead = $( "a.active").text();
    $(".content-header").text("doc > " + contentHead);
    // Set content
    $(".content-body").hide();
    $(".show").show();
    // Tab function
    $("a.menubar").click(function(){
      // onClick toggle active , deactive
      $(".active").toggleClass("active");
      $(this).toggleClass("active");
      $(".content-body").hide();
      var id = $(this).attr('id');
      // fade in a litte bit ; w ;
      $("."+id).show();
      // Get content name and put to header
      var contentHead = $( "a.active").text();
      $(".content-header").text("doc > " + contentHead);
    });
  });
  </script>
</html>
