<?php 
//session starts
session_start();
//includes database connection page
include('common.php'); 
//echo $_SESSION['uniq_id'];
$name=$_SESSION['username'];
$sid=$_SESSION['studentid'];

//echo $_SESSION['studentid'];


//getting values from form
if(isset($_POST['save']))
{
$name3= $_POST['name2'];
$about1= $_POST['aboutd'];
$linke=$_POST['linke'];
$payp=$_POST['payp'];
//echo $_FILES['image']['error'];
//if image is uploaded then go to if otherwise go to else statement
if(is_uploaded_file($_FILES['image']['tmp_name']))
{
	//echo "hi";
  $temp=$_FILES['image']['tmp_name'];
  $pic="images/".$_FILES['image']['name'];
  move_uploaded_file($temp,$pic);
  $query=mysql_query("update student set about='".$about1."',linkedin='".$linke."',name='".$name3."',paypal='".$payp."',pic='".$pic."' where sid='".$_SESSION['studentid']."'") or die(mysql_error());
  
}
else
{
//echo "<pre>"; print_r($_FILES); echo "</pre>";
$query=mysql_query("update student set about='".$about1."',linkedin='".$linke."',name='".$name3."',paypal='".$payp."' where sid='".$_SESSION['studentid']."'") or die(mysql_error());
	}
}
//select values from table
	$tab=mysql_query("select * from student where sid='".$sid."'");
	

?>








<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
     <link href="css/student.css" rel="stylesheet">
    <title>Student Profile</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar-fixed-top.css">
    <link rel="stylesheet" href="css/sticky-footer-navbar.css">
    <style>
@font-face { font-family: JuneBug; src: url('fonts/File.otf'); } 
h7 {
font-family: JuneBug;
font-size: 150%
}


</style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
 <!-- Fixed navbar -->
    <!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
         in3Hrs.com
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </div> <!-- container -->
  </div> <!-- navbar div -->

     
 <div class="container">
     
       
         
     
	<?php while($row=mysql_fetch_array($tab)){ ?>
    <div class="row">
		<div class="col-md-12 well">
         <h3>User Profile</h3> </br>
             
			 <form class="form-horizontal"  method="post" role="form" enctype="multipart/form-data">
              <div class="form-group">
                   <label for="name"  class="col-sm-2 control-label">FullName</label>
                           <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $row['name'];?>" name="name2">
                           </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                                <p class="form-control-static"><?php echo $row['email'];?></p>
                          </div>
               </div>
              <div class="form-group">
                    <label for="Linkedin" class="col-sm-2 control-label">Linkedin</label>
                           <div class="col-sm-4">
                                 <input type="text" class="form-control" value="<?php echo $row['linkedin'];?>" name="linke">
                           </div>
              </div>
              <div class="form-group">
                   <label for="about" class="col-sm-2 control-label">About</label>
                          <div class="col-sm-4">
                                <textarea class="form-control" rows="3" name="aboutd"><?php echo $row['about'];?></textarea>
                           </div>
               </div>
              <div class="form-group">
                     <label  class="col-sm-2 control-label">Paypal</label>
                             <div class="col-sm-4">
                                   <input type="text" class="form-control" value="<?php echo $row['paypal'];?>" name="payp">
                             </div>
              </div>
               <div class="form-group">
                    <label class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                                 <img src="<?php echo $row['pic'];?>" width="80px" height="80px"/></br> <input type="file" id="exampleInputFile" name="image"/>
                           </div>
               </div>
               <div class="form-group">
                     <label  class="col-sm-2 control-label"></label>
                              <div class="col-sm-4">
                                   <input type="submit" name="save" value="saveandchanges" class="myButton"/>
                              </div>
                </div>
  
  
</form>
        </div>	 
     </div>	
     <?php }?>	


</div>
<div id="footer">
      <p align="center">&copy; SJB </p>
      <div align="center">
        <ul class="footer-links">
            <li><a href="#about">About Us</a></li>
            <li class="mute"> . </li>
            <li><a href="#contact">Contact Us</a></li>
            <li class="mute"> . </li>
            <li><a href="#">Blog</a></li>
        </ul>
      </div>
  </div>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
