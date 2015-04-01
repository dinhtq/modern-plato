<?php
  include 'includes/db.inc.php';
  include 'includes/magicquotes.inc.php';
  include 'includes/pullstates.php';


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
          
          <div class="col-sm-4 col-md-4 col-lg-4">  

             

          </div>
           <div class="col-sm-4 col-md-4 col-lg-4">

                <div class="logo-container">

                    <a href="feed.php" style="text-decoration:none;"><div id="logo-feed">

                      Modern Plato</div></a>
                </div>

           </div> 

              
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

           
           
      </div>
    </nav>

  

  <div class="container">
    


      <div class="row" >

        

        <div class="col-sm-7 col-md-7 col-lg-7">

          <div class="container-fluid row-2-custom">

            <h1 class="custom-header">Post a Case</h1>

             <form class="form-horizontal" role="form" id="postCase" method="post" action="includes/insertCase.php">

              <div class="form-group form-group-sm ">
                  <label class="col-sm-3 control-label custom-label" for="title">title</label>
                  <div class="col-sm-6">
                  
                   <input type="text" id="title" class="form-control text-right" name="title" placeholder="Help with DUI, Got fired from work,..." required>
                    

                  </div>
                </div>

                

                 <div class="form-group form-group-sm desc">
                  <label class="col-sm-3 control-label custom-label" for="description">description</label>
                  <div class="col-sm-6">
                  
                    <textarea id="description-text"  name="description" required></textarea> 
                    

                  </div>
                </div>




                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label custom-label" for="email">email</label>
                  <div class="col-sm-6">
                    <input class="form-control text-right " type="text" name="email"  required>
                    
                  </div>

                </div>

                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label custom-label" for="state">state</label>
                  <div class="col-sm-6">

                
                    <select id="state" name="state" class="form-control"  required>
                       <option value="" disabled selected>Select the state</option>
                      <?php foreach ($states as $state) : ?>

                          <option value=<?php echo $state['state']  ?>> <?php echo $state['state']  ?></option>


                    <?php endforeach; ?>  
                    </select>
                    
                  </div>
                </div>

                 <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label custom-label" for="city">city</label>
                  <div class="col-sm-6">



                     <select id="city" name="city" class="form-control"  required>
                       <option value="" disabled selected>Select the city</option>
                     
                    </select>



                
                    
                  </div>
                </div>

                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <input type="submit"   id="postbtn" class="btn btn-info btn-block" value="POST">
                    </div>
                </div>
             </form>

            

           

         
          </div><!--end container fluid for forms -->

        </div>

         <div class="col-sm-5 col-md-5 col-lg-5">

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
    <script src="js/vendor/jquery.textfill.min"></script>
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
