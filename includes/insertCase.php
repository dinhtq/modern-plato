<?php

include 'db.inc.php';

if (isset($_POST['description'])) {

            $email = $_POST['email'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $title = $_POST['title'];
            $description = $_POST['description'];


            $username = "anonymous";
            $password = "anonymous";



            //see if we can get the zipcode of state and city
            $query_zip = mysqli_query($link,
                    "SELECT zip FROM zips WHERE city = '$city' AND state = '$state' ");

            if (!$query_zip) {
                $error = "Unable to get zipcode";
                include 'error.html.php';
                exit();
              }


            while ($row_test = mysqli_fetch_array($query_zip)) {
               $zip = $row_test['zip'] ;
            }


            //insert user email into tUsers table
            $query_insertEmail = mysqli_query($link,
                        "INSERT INTO tUsers (strUsername, strPassword, strEmail)
                              VALUES  ( '$username','$password','$email') ");
            if (!$query_insertEmail) {
                $error = "Unable to insert email";
                include 'error.html.php';
                exit();
              }


            //get userID

            $query_user = mysqli_query($link, 
                    "SELECT id FROM tUsers WHERE strEmail = '$email' ");

            if (!$query_user) {
                $error = "Unable to get userID";
                include 'error.html.php';
                exit();
              }

            while ($row_user = mysqli_fetch_array($query_user)) {
              $userid = $row_user['id'];
            }



            //insert zipcode, userID, description into tComments table

            $query_insertcase = mysqli_query($link,
                        "INSERT INTO tComments ( userid, zipid, strComments, title ) 
                            VALUES         ( '$userid', '$zip', '$description', '$title' )");

            if (!$query_insertcase) {
                $error = "Unable to insert case";
                include 'error.html.php';
                exit();
              }


              header("location: ../feed.php") or die ("header didnt work");



              
  }





        







?>