<?php

if (isset($_GET['username'])) {

	$newUser = $_GET['username'];
	$newEmail = $_GET['email'];
	$newPassword = $_GET['password'];


	//query insert

	$queryNewUser = mysqli_query($link,
					"INSERT INTO tUsers (strUsername, strPassword, strEmail)
						VALUES ('$newUser','$newPassword', '$newEmail')	") 
							or die("Unable to insert new user");

	if (!$queryNewUser) {
                $error = "Unable to insert new user";
                include 'error.html.php';
                exit();
              }



}




























?>