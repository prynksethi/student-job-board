

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
  <link rel="stylesheet" href="../css/lib/styles.css">
</head>
<body>
  
  <!-- top nav bar -->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">in3Hrs.com</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li><a href="#">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
    </div> <!-- container -->
  </div> <!-- navbar div -->
  
  <div class="container form-container">
  <div class="row">
    
    <div class="col-md-offset-4">
      <form class="form-signin mg-btm" method="post" action=".">
      <h3 class="heading-desc">Login to in3Hrs.com</h3>
      <div class="social-box">
      <div class="row mg-btm">
             <div class="col-md-12">
                <a href="#" class="btn btn-primary btn-block">
                  <i class="icon-facebook"></i>    Login with Facebook
                </a>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
                <a href="#" class="btn btn-info btn-block" >
                  <i class="icon-twitter"></i>    Login with Twitter
                </a>
            </div>
          </div>
    </div>
    <div class="main">  
        
    <input type="text" class="form-control" placeholder="Email" autofocus name="email">
    <input type="password" class="form-control" placeholder="Password" name="password">
     
        
    <span class="clearfix"></span>  
        </div>
    <div class="login-footer">
    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="left-section">
                <a href="">Forgot your password?</a>
                <a href="">Sign up now</a>
              </div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
          <button type="submit" name ="submit" class="btn btn-large btn-success pull-right">Login</button>
                       <?php if(isset($InvalidUser)){echo "username and password is wrong";} ?> </div>
                    </div>
    
    </div>
      </form>
    </div>

  </div>
</div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>