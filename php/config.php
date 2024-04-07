<?php
$db_host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db_name = getenv("DB_NAME");
  // enter your connection string for database here
  $conn= new mysqli("$db_host","$user","$pass","$db_name");
   
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }
  
  // razorpay test key
  $rzp_key = "ENTER_YOUR_RAZORPAY_KEY_HERE";

  
?>