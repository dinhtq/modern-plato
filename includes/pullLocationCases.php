<?php

include_once 'db.inc.php';

if (isset($_POST['location'])) 
{
	


	$location = mysqli_real_escape_string($link,$_POST['location']);
	$location = trim($location);

	//remove United States...now just city, state
	$newlocation = substr($location, 0, -15);

	//remove state
	$newCity = substr($newlocation, 0, -4);
	$newCity = trim($newCity);

	$newState = substr($newlocation, -2,2);
	$newState = trim($newState);


	//get the cases that matches city and state searched
	$querySearched = mysqli_query($link, 
						"SELECT tComments.zipid, tComments.title, tComments.strComments, zips.city, 
						zips.state, tComments.Date, tUsers.strEmail FROM tComments 
						INNER JOIN zips ON tComments.zipid = zips.zip 
						INNER JOIN tUsers ON tComments.userid = tUsers.id
						WHERE zips.city = '$newCity' AND zips.state = '$newState'")
						or die ("Unable to query searched city and state");


	
}
	

?>