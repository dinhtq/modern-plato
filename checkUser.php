<?php

  include_once 'includes/db.inc.php';
  include 'includes/magicquotes.inc.php';


  $testusr = $_GET['username'];

  $testvalid = false;


  $testquery = mysqli_query($link, 
  					"SELECT * FROM tUsers WHERE strUsername = '$testusr' ")
  				 or die("Unable to get check username");

  $testrow_user = mysqli_fetch_array($testquery);

  if ($testrow_user) {
  	$testvalid = false;
  }
  else{
  	$testvalid = true;
  }



  echo json_encode($testvalid);






?>