
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>in3hrs.com</title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
      <![endif]-->
      <link href="../css/bootplus.css" rel="stylesheet">
      <link href="../css/bootplus-responsive.css" rel="stylesheet">
      <link href="../css/custom.css" rel="stylesheet">
      <link href="../css/home.css" rel="stylesheet">


    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar _navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">in3hrs.com</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Find Services </a></li>
                <li><a href="#contact">Start Selling</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->

              </ul>
                              <a class="btn  btn-success pull-right" href="#">Sign in</a>

            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

     <!--  Form for editing profile -->
      <div class="container movedown">
    
      <div class="row ">
      <div class="card span12">
    
      <div class="span6 offset3" >
    
    <h2>Edit Profile</h2>
    <hr>
    
    <form class="form-horizontal" action="." method="POST" enctype="multipart/form-data">
      <div class="control-group">
      <label class="control-label">Name</label>
      <div class="controls">
      <input type="text" name="name" value="<?php echo $name; ?>"></input>
      </div>
      </div>
    
      <div class="control-group">
      <label class="control-label">Email id</label>
      <div class="controls">
      <input type="email" name="email" value="<?php echo $email; ?>"></input>
      </div>
      </div>
      
      <div class="control-group">
      <label class="control-label">Profile Picture</label>
      <div class="controls">
      <input type="file" name="picture"></input>
      </div>
      </div>
      
      


      <div class="control-group">
      <label class="control-label">Linkedin</label>
      <div class="controls">
      <input type="email"  name="linkedin" value="<?php echo $linkedin; ?>">
      </div>
      </div>

      <div class="control-group">
      <label class="control-label">Paypal</label>
      <div class="controls">
      <input type="email"  name="paypal" value="<?php echo $paypal; ?>">
      </div>
      </div>
      
      
      
      <div class="control-group">
      <label class="control-label">About you</label>
      <div class="controls">
      <textarea  name="about" value="<?php echo $about; ?>"></textarea>
      </div>
      </div>

      <div class="controls">
      
      <button type="submit" name="action"   class="btn btn-success">Update Profile</button>
      </p>
    </form>
    
    </div>
  
    </div>
  
  </div>



    <div class="container">
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="js/holder/holder.js"></script>
  </body>
</html>
