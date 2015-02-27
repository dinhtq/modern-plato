<?php


function showQueryError($query) {
	
	if(!$query) {
		$error = "Unable to perform" . $query . " query";
		include 'error.html.php';
		exit();
	} 

}






?>