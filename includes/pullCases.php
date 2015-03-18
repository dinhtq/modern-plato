<?php


include 'helper_fnx.php';

//query Username from user table and cases zip, description and title
$query_pullAll = mysqli_query($link,
				"SELECT tUsers.strUsername,tComments.zipid,tComments.strComments,tComments.title, 
				tComments.Date 
				FROM tComments INNER JOIN tUsers ON tComments.userid = tUsers.id
				 ORDER BY tComments.Date DESC ");



showQueryError($query_pullAll);

?>