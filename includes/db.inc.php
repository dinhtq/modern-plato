<?php

$link = mysqli_connect('localhost','root','root');

//connect to the db

if(!$link) {
	$error = "Unable to connect to the database server." ;

	include 'error.html.php';
	exit();
}

//use UTF-8 encoding to maximize range of characters that users have at their disposal

if (!mysqli_set_charset($link, 'utf8')) {
	$error = 'Unable to set database connection encoding.' ;
	include 'error.html.php';
	exit();
}

//selecting the db

if (!mysqli_select_db($link, 'modernPlato')) {
	$error = 'Unable to locate modernPlato database.';
	include 'error.html.php';
	exit();
}


?>