 




 <?php

 include 'db.inc.php';

 $state = $_GET['state'];

  $query_cities = mysqli_query($link,
                "SELECT DISTINCT city FROM zips WHERE state = '$state' ");

  if (!$query_cities) {
    $error = "Unable to query cities";
    include 'error.html.php';
    exit();
  }

  while ($row_cities = mysqli_fetch_array($query_cities)) {
    echo "<option>" . $row_cities['city'] . "</option>";
  }


  ?>