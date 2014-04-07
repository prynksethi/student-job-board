<?php 
//include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include("../../public/models/users.php");
include("../../public/models/categories.php");

 $offering_id=$offeringid;
$users = new users;
$offering=new offering();
$cat= new category();
$categoryname= $cat->find_category_by_offerid($offering_id);
//$user_id=1;
//$item_num=2;
$data = $offering->get_offers_by_offer_id($offering_id);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>in3hrs.com&middot; Bootstrap</title>
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




  <div class="container movedown">
    <div class="row">
      
      <div class="span9 card">
      <div class="span8">
        <h2><?php echo $data[1]; ?><br>
          <small>Created <?php echo $data[5]; ?>. Posted in <a href="#"><?php echo $categoryname[0]; ?></a></small>
        </h2>
        <hr>
         <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      <div class="carousel inner">
        <div class="item active">
      <img src='../<?php echo $data[0]; ?>' alt="First slide image">
          <div class="carousel-caption">
            <h2>Create Letters</h2>
            <p>My letters will make employers want to hire you!!!</p>
          </div>
        </div>
        
        
      </div>
      <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
        <h4>
        <?php echo $data[3]; ?>
      </h4>
      
        <hr>
      <h3>My Other Offerings</h3>
      <hr>

          <div class="card people">
    <div class="card-top green">
    <a href="#">
    <img src="" alt=""/>
    </a>
    </div>
    <div class="card-info">
    <a class="title" href="#">I will do this work for you</a>
    
    <div class="card-bottom">
    <button class="btn btn-block">Edit</button>
    </div>
    </div>
    </div>


        <div class="card people">
    <div class="card-top blue">
    <a href="#">
    <img src="" alt=""/>
    </a>
    </div>
    <div class="card-info">
    <a class="title" href="#">I will make a Webpage</a>
    
    <div class="card-bottom">
    <button class="btn btn-block">Edit</button>
    </div>
    </div>
    </div>

        <div class="card people">
    <div class="card-top green">
    <a href="#">
    <img src="" alt=""/>
    </a>
    </div>
    <div class="card-info">
    <a class="title" href="#">I will design your DBMS</a>
    <div class="card-bottom">
    <button class="btn btn-block">Edit</button>
    </div>
    </div>
    </div>
        <div class="card people">
    <div class="card-top blue">
    <a href="#">
    <img src="" alt=""/>
    </a>
    </div>
    <div class="card-info">
    <a class="title" href="#">Will do your home work</a>
    <div class="card-bottom">
    <button class="btn btn-block">Edit</button>
    </div>
    </div>
    </div>
        
      <h3>Customer Reviews
      </h3>
      <hr>

       <div class="card-comments">
        <div class="comments">
        <a  data-target="#c1-comments" href="#c1-comments">34 comments </a><hr>
        </div>
      <div id="c1-comments" class="comments ">
        <div class="media">
      <a class="pull-left" href="#">
      <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
      </a>
        <div class="media-body">
          <h4 class="media-heading">Comment title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
      </div>
      </div>
    </div>
    <div id="c1-comments" class="comments ">
        <div class="media">
      <a class="pull-left" href="#">
      <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
      </a>
        <div class="media-body">
          <h4 class="media-heading">Comment title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
      </div>
      </div>
    </div>
    <div id="c1-comments" class="comments ">
        <div class="media">
      <a class="pull-left" href="#">
      <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
      </a>
        <div class="media-body">
          <h4 class="media-heading">Comment title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
      </div>
      </div>
    </div>
    </div>

    </div>
    </div>



    <div class="span3 card">
      <div class="span2">
        <h2>
          <?php 
           $userid= $users->get_user_by_offer_id($offeringid);
          if($_SESSION['userid']==$userid[6]){ ?>
          <a href="?edit=<?php echo $offering_id;?>"><button class="btn btn-success" >Edit this Offering</button></a><br>
          <a href="?delete=<?php echo $offering_id;?>"><button class="btn btn-danger" >Delete Offering</button></a> <?php } else {?>
           <button class="btn btn-success" >Order this</button> <?php } ?>
          <hr>
        </h2>
        
          <h3>
          <span class="glyphicon glyphicon-heart"></span> 99% 
          <span class="glyphicon glyphicon-thumbs-up"></span> 234
        </h3>
        <hr>
        <p>Related Categories</p>
        <p>
          <a href="#" class="btn btn-xs btn-info">Wordpress <span class="badge">23</span></a>
          </p>
          <p>
          <a href="#" class="btn btn-xs btn-info">Html <span class="badge">23</span></a>
        </p>
        <p>
          <a href="#" class="btn btn-xs btn-info">CSS <span class="badge">23</span></a>
          
        </p>
      </div>

    </div>
  </div>

  
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