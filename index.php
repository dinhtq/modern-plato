

<?php
  include_once 'includes/db.inc.php';
 


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
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!-- jQuery UI -->

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" href="css/main.css">

        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   <nav class="nav-custom " role="navigation">
      <div class="container">
        
        <div class="col-sm-8 col-md-8 col-lg-8">          
        </div>
         <div class="col-sm-1 col-md-1 col-lg-1">
         </div> 
          <div class="col-sm-2 col-md-2 col-lg-2">
            <!--
            <a class ="btn btn-info btn-sm headerbtn" href="signUp.php"><span class="glyphicon glyphicon-plus"></span>Sign Up</a>
            <a class="btn btn-info btn-sm headerbtn"><span class="glyphicon glyphicon-user"></span>Log In</a>
           -->

         </div> 

         <div class="col-sm-1 col-md-1 col-lg-1"></div>
         
      </div>
    </nav>

  


 


        <div class="container-fluid logo-wrapper">

              <div class="row">
                  <div class="col-sm-3  col-lg-3">
                    
                  </div>



                  <div class="col-sm-6  col-lg-6">

                    <div class="logo-container">
                                <div id="logo">Modern Plato</div>
                    </div>
                    
                        
                  </div>

                  <div class="col-sm-3  col-lg-3">
                    
                  </div>
            </div> <!-- end row 1-->
        </div>

     <div class="container-fluid index-content-container">
        
              <div class="row" >

                  <div class="col-sm-2 col-md-2  col-lg-2">
                  </div>  

                  <div class="col-sm-4 col-md-4 col-lg-4" style="border-right: 1px dashed yellow;">

                        <div class="container-fluid post-btn-container">

                          
                              <a type="button" href="postform.php" name="post_case"> <button class="post-btn" onclick="highlight_text()">
                                <big>Post Your Legal Troubles</big></button></a>
                     
                              <div class="index-subtext">If you are a victim of the law</div>
                              


                        </div><!--end container fluid for forms -->

                  </div>

                  

                  <div class="col-sm-4 col-md-4  col-lg-4">

                          <div class="container-fluid find-side-wrapper">
                              <div class="find-side-container">
                                  <form role="form" action="feedSearched.php" method="post">

                                    <div class="form-group">
                                      <label for="city_state" class="label-custom ">where</label>
                                      <input type="text" id="location" name="location" class="form-control input-lg text-right"  placeholder="city, state">
                                    </div>  

                                     <div class="form-group">
                                      
                                      <input type="submit"   id="findbtn" class="btn-find" value="Find a Case">
                                    </div>    
                                       <div class="index-subtext">If you are a lawyer</div>
                                  </form>
                              </div>


                          </div><!--end container fluid for forms -->


                  </div>

                   <div class="col-sm-2 col-md-2  col-lg-2">

                  </div>

                </div> <!--end row 2 -->
        </div>


        <div class="container-fluid quote-container">
          <div>"Justice will not be served until those who are unaffected are as outraged as those who are."</div>
          <div>-Benjamin Franklin</div>

         </div> 



 <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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
