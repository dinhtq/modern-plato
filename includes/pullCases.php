<?php


include 'helper_fnx.php';

//query all cases
$query_pullAll = mysqli_query($link,
				"SELECT userid,zipid,strComments FROM tComments");




?>