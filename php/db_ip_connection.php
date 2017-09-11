<?php
  // require log system
  require_once __DIR__ . '/monolog_global.php';
  // credent info
  $servername_db_ip = 'localhost';
  $username_db_ip = 'natpaphon';
  $password_db_ip = 'sukitpaneenit';
  $dbname_db_ip = 'ip2location';
  // Get user info
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  $flog->info('Get user ip ' . $ip);
  $ip = ip2long($ip);
  // connect db
  try{
    $connect_db_ip = new PDO("mysql:host=$servername_db_ip; dbname=$dbname_db_ip", $username_db_ip,$password_db_ip);
    // Set PDO error mode
    $connect_db_ip->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $flog->info('IP Database connected successfully');
    // Query
    $sql = "SELECT country_code,country_name FROM ip4location WHERE $ip BETWEEN ip_from_int AND ip_to_int;";
    $statement = $connect_db_ip->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $flog->info('User connect from ' . $result[0][country_code] . ' AKA ' . $result[0][country_name]);
    $usrcountrycode = $result[0][country_code];
  }
  catch(PDOException $e){
    $flog->info("Connection failed: " . $e->getMessage());
  }
?>
