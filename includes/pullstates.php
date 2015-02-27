<?php

  $result_states = mysqli_query($link,
              'SELECT DISTINCT state FROM zips');

  if(!$result_states) {
    $error = "Unable to query";
    include "includes/error.html.php";
    exit();
  }

  while ($row = mysqli_fetch_array($result_states)) {
    $states[] = array('state' => $row['state']);
  }


?>