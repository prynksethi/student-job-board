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


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
  <style>
    body {
      background: #f6f6f6;
      margin-top: 70px;
      margin-left: 2%;
      margin-right: 2%;
    }
    .coloumnBox {
      background:white;
      margin-right:1%;
    }
  </style>
</head>
<body>
    <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
  
  
  <!-- Navigation Bar -->
<?php include '../includes/header.inc.php'; ?>
  <div class="container-fluid">
      
    <div class="row">
      
      <div class="col-md-8 coloumnBox">
        <h2><?php echo $data[1]; ?>
          <br><small>Created <?php echo $data[5]; ?>. Posted in <a href=""><?php echo $categoryname[0]; ?></a></small>
        </h2>
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
        <g:plusone></g:plusone>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <hr>
        
        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
      <img src='../<?php echo $data[0]; ?>' alt="First slide image">
          <div class="carousel-caption">
            <h3>Create Letters</h3>
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

      <p></p>

      
      <p>
        <?php echo $data[3]; ?>
      </p>


      

      <hr>

      <h3>My Other Offerings</h3>
      <p>
        <hr>
        <h4>
          <span style="margin-right: 5%;">Views: <span class="text-primary"> 932</span></span>
          <span>Sales: <span class="text-success"> 32</span></span>
        </h4>
        <canvas id="analytics" width="800" height="400"></canvas>
      </p>
      <hr>
      <h3>Customer Reviews
        <span class="pull-right">
          <span class="glyphicon glyphicon-thumbs-up"></span> 234 
          <span class="glyphicon glyphicon-thumbs-down"></span> 2
        </span>
      </h3>
      <hr>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      </div>
      <div class="col-md-3 coloumnBox">
        <h2>
          <?php 
           $userid= $users->get_user_by_offer_id($offeringid);
           if($_SESSION['userid']!)
           {
            
           }
          elseif($_SESSION['userid']==$userid[6]){ ?>
          <a href="?edit=<?php echo $offering_id;?>"><button class="btn btn-success" >Edit this Offering</button></a>
          <a href="?delete=<?php echo $offering_id;?>"><button class="btn btn-danger" >Delete Offering</button></a> <?php } else {?>
           <button class="btn btn-success" >Order this</button> <?php } ?>
          <hr>
        </h2>
        <p>
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
        </p>
        <hr>
        <h3>
          <span class="glyphicon glyphicon-heart"></span> 99% 
          <span class="glyphicon glyphicon-thumbs-up"></span> 234
        </h3>
        <hr>
        <p>
          Related Categories
        </p>
        <p>
          <a href="#" class="btn btn-xs btn-info">seo <span class="badge">23</span></a>
          <a href="#" class="btn btn-xs btn-info">facebook <span class="badge">23</span></a>
          <a href="#" class="btn btn-xs btn-info">wordpress <span class="badge">23</span></a>
        </p>
        <p>
          <a href="#" class="btn btn-xs btn-info">resumes <span class="badge">23</span></a>
          <a href="#" class="btn btn-xs btn-info">twitter <span class="badge">23</span></a>
        </p>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
  </div>

  <div class="container">    
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><strong>in3Hrs.com</strong><li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><strong>Help &amp; Support</strong><li>
          <li><a href="#">in3Hrs.com Help</a></li>
          <li><a href="#">Frequently Asked Questions</a></li>
          <li><a href="#">User Forum</a></li>
        </ul>
      </div>  
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-8">
        <a href="#">Terms of Service</a>    
        <a href="#">Privacy</a>    
        <a href="#">Security</a>
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">© 2014 Jaaga Student Job Board. All rights reserved</p>
      </div>
    </div>
  </div>
</div>

   
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/chart.js"></script>
  </script>
  <script>
    $(document).ready(function(){

      var data = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
        {
          fillColor : "rgba(220,220,220,0.5)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : "rgba(151,187,205,0.5)",
          strokeColor : "rgba(151,187,205,1)",
          pointColor : "rgba(151,187,205,1)",
          pointStrokeColor : "#fff",
          data : [28,48,40,19,96,27,100]
        }
      ]
    };
    var ctx = $("#analytics").get(0).getContext("2d");
    var charty = new Chart(ctx).Line(data,{});
   setInterval(function(){
      $('#analytics').fadeOut();
      setInterval(function(){
        $('#analytics').fadeIn();
      }, 1000);
   }, 5000);
    });
  </script>
</body>
</html>