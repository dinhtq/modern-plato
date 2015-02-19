

<?php
  include_once 'includes/db.inc.php';
  include_once 'magicquotes.inc.php';




?>






<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en" > <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Modern Plato</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   <nav class="navbar nav-custom navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        
        <div class="col-sm-8 col-md-8 col-lg-8">          
        </div>
         <div class="col-sm-1 col-md-1 col-lg-1">
         </div> 
          <div class="col-sm-2 col-md-2 col-lg-2">

            <a class ="btn btn-info btn-sm headerbtn" href="signUp.php"><span class="glyphicon glyphicon-plus"></span>Sign Up</a>
            <a class="btn btn-info btn-sm headerbtn"><span class="glyphicon glyphicon-user"></span>Log In</a>
           

         </div> 

         <div class="col-sm-1 col-md-1 col-lg-1"></div>
         
      </div>
    </nav>

  



  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
          
        </div>



        <div class="col-sm-5 col-md-5 col-lg-5">

              <table class="table " style="margin-top:-25px;">
                <tbody>
                  
                  <tr>
                    <td id="value" colspan="4" style="vertical-align:bottom" >
                      <img src="img/mp-logo.png" width="450" height="209" ></td>
                  </tr>

                </tbody>
              </table>
        </div>

        <div class="col-sm-5 col-md-5 col-lg-5">
          
        </div>
      </div> <!-- end row 1-->


      <div class="row" >

        <div class="col-sm-4 col-md-4 col-lg-4">
        </div>  

        <div class="col-sm-4 col-md-4 col-lg-4">

          <div class="container-fluid row-2-custom">

            <form role="form">

              <div class="form-group">
                <label for="city_state" class="label-custom">where</label>
                <input type="text" id="where_text" name="where_this" class="form-control input-lg text-right"  placeholder="city, state or zip code">
              </div>  

               <div class="form-group">
                <button type="submit" name="find_case" class="btn btn-info btn-block"><big>Find a case</big></button>
              </div>  

              <div class="form-group">
                <p align="center"><strong>-OR-</strong></p>
              </div>  

              <div class="form-group">
                <a type="submit" href="postform.php" name="post_case" class="btn btn-success btn-block" onclick="highlight_text()"><big>Post a case</big></a>
              </div>  

             


            </form>


          </div><!--end container fluid for forms -->

        </div>

         <div class="col-sm-4 col-md-4 col-lg-4">

        </div>

      </div> <!--end row 2 -->



      <br>
      <br><br>


 

      <footer>
       
      </footer>
    </div> <!-- /container -->   




 <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    
    </body>
</html>
