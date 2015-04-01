<?php

$zip = $row_cases['zipid'];

$querylocation = mysqli_query($link,
					"SELECT DISTINCT city,state FROM zips WHERE zip = '$zip' ");

if(!$querylocation)
{
	$error = "Unable to query city and state";
	include 'error.html.php';
	exit();
}








?>