<?php
  // require log system
  require_once __DIR__ . '/monolog_global.php';
  $flog->info('Data base online');
  //credent info
  $servername = "localhost";
  $username = "natpaphon";
  $password = "sukitpaneenit";
  // connect
  $conn = new mysqli($servername, $username ,$password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $flog->info('Database connected successfully');
?>
