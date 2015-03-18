<?php

  include_once 'includes/db.inc.php';
  include 'includes/magicquotes.inc.php';


  $signUpEmail = $_GET['email'];

  $emailValid = false;


  $signUpEmailQuery = mysqli_query($link, 
  					"SELECT * FROM tUsers WHERE strEmail = '$signUpEmail' ")
  				 or die("Unable to get check sign up form email");

  $email_row_user = mysqli_fetch_array($signUpEmailQuery);

  if ($email_row_user) {
  	$emailValid = false;
  }
  else{
  	$emailValid = true;
  }



  echo json_encode($emailValid);






?>