<?php
    // require_once realpath(__DIR__ . "../vendor/autoload.php");
//     require __DIR__ . '/vendor/autoload'; 
//     use Dotenv\Dotenv;
//         $dotenv = Dotenv::createImmutable(__DIR__);
//         $dotenv->load();

// $db_host = getenv("db_host");
// $user = getenv("user");
// $pass = getenv("pass");
// $db_name = getenv("db_name");
  
  // enter your connection string for database here
  $conn= new mysqli("127.0.0.1","php","php123@","php");
   
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }
  
  // razorpay test key
  $rzp_key = "ENTER_YOUR_RAZORPAY_KEY_HERE";

  
?>
<!-- $db_host = getenv("127.0.0.1");
$user = getenv("php");
$pass = getenv("php123@");
$db_name = getenv("php"); -->

