<?php
$con = mysqli_connect("phptipsntricks.com","phptipsn_sms","abcd@#1234","phptipsn_click2call");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "Connected Successfully.";
  }