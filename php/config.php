<?php
   
  // enter your connection string for database here
  $conn= new mysqli("127.0.0.1","php","php123@","php");
   
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }
  
  // razorpay test key
  $rzp_key = "ENTER_YOUR_RAZORPAY_KEY_HERE";

  
?>

