<?php
  include_once 'includes/db.inc.php';


  if(isset($_POST['location'])) {

    include_once 'includes/pullLocationCases.php';

  } 
  else {

    include 'includes/pullCases.php';

  }

 
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
   <nav class="navbar  navbar-inverse nav-feed navbar-fixed-top " role="navigation">
      <div class="container">
          
           <div class="col-sm-1 col-md-1 col-lg-1">  

          </div>


            <div class="col-sm-2 col-md-2 col-lg-2">

                <div class="feed-post-wrapper">

                    <a type="button" href="index.php"><button class="feed-post-btn">
                      <span class="glyphicon glyphicon-search post-pencil" ></span>
                      Find a case
                      
                    </button>

                    </a>
                   

                </div>

             
            

            </div> 
             <div class="col-sm-1 col-md-1 col-lg-1">  

          </div>
         
           <div class="col-sm-4 col-md-4 col-lg-4">

                <div class="logo-container">
                                <a href="feed.php" style="text-decoration:none;"><div id="logo-feed">Modern Plato</div></a>
              </div>

           </div> 

              
          <div class="col-sm-1 col-md-1 col-lg-1">  

          </div>


            <div class="col-sm-2 col-md-2 col-lg-2">

                <div class="feed-post-wrapper">

                    <a type="button" href="postform.php"><button class="feed-post-btn">
                      <span class="glyphicon glyphicon-pencil post-pencil" ></span>
                      Post a case
                      
                    </button>

                    </a>
                   

                </div>

             
            

            </div> 
             <div class="col-sm-1 col-md-1 col-lg-1">  

          </div>

           
           
      </div>
    </nav>



  



  <div class="container feed-wrapper">

     <div class="row">
                  <div class="col-sm-1 col-md-1  col-lg-1">
                    
                  </div>

                  <div class="col-sm-10 col-md-10  col-lg-10">

                     <?php while ($row_cases = mysqli_fetch_array($query_pullAll)) : ?>
                  
                       <div id="content-wrapper">

                          <div class="content-header">

                            <div class="content-date">
                                <span class="glyphicon glyphicon-file"></span>
                               

                                <span class="content-title"><?php echo $row_cases['title'];  ?>
                                                        
                                </span>
                            </div> 
                           

                          </div>

                              <div class="content">

                                     <p><?php echo $row_cases['strComments'] ?></p> 
                              

                              </div>

                              <div class="content-footer">

                                  <div>
                                    <span class="glyphicon glyphicon-map-marker"></span>

                                    <?php 

                                        $zip = $row_cases['zipid'];

                                        $querylocation = mysqli_query($link,
                                                        "SELECT DISTINCT city,state FROM zips WHERE zip = '$zip' ");

                                              if(!$querylocation)
                                              {
                                                $error = "Unable to query city and state";
                                                include 'includes/error.html.php';
                                                exit();
                                              }

                                       while($location = mysqli_fetch_array($querylocation)) 
                                                {
                                                  echo $location['city'] . ", " . $location['state'];
                                                }


                                       ?>

                                      <span class="glyphicon glyphicon-envelope" style="margin-left:1%;">

                                          <span class="footer-email">

                                              <?php echo $row_cases['strEmail'];    ?>


                                          </span>

                                      </span>


                                  </div>

                              </div>    


                        </div> 
                      <?php endwhile; ?>

                  </div>

                  <div class="col-sm-1 col-md-1  col-lg-1">
                    
                  </div>
      </div> <!-- end row 1-->

    
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
