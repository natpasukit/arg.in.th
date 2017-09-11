<?php
  require_once __DIR__ . '/../php/db_connection.php';
  require_once __DIR__ . '/../php/db_ip_connection.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website of ARG teamwork">
  <meta name="author" content="natpaphon sukitpaneenit">
  <meta name="Keywords" content="csgo, csgoserver, เซิฟ csgo, เซิฟเกม, communityserver, dedicated server">
  <title>ARG - The house of gamer</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../resource/css/bootstrap.css" type="text/css">
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link rel="stylesheet" href="../resource/css/font-awesome/css/font-awesome.min.css" type="text/css">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="../resource/css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../resource/css/creative.css" type="text/css">
  <link rel="stylesheet" href="../resource/css/login.css" type="text/css">
</head>
<body>
  <div class="login-container">
    <div class="login-toggle-container">
      <p><h1> Hey </h1></p>
      <h3> Just Login </h3>
      <h1 class="animated flash infinite"> Please </h1>
    </div>
    <div class="login-form-container">
      <div class="login-username-container">
        <label>Username</label>
        <input autofocus placeholder="USERNAME" type='text' id='login-username'>
      </div>
      <div class="login-password-container">
        <label>Password</label>
        <input placeholder="PASSWORD" type='password' id='login-password'>
      </div>
      <div class="login-button-container animated pulse">
        <button class='js-toggle-login login--login-submit'>Login</button>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="../resource/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../resource/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="../resource/js/jquery.easing.min.js"></script>
  <script src="../resource/js/jquery.fittext.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="../resource/js/creative.js"></script>
</body>
</html>
