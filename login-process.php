<?php 
if(isset($_POST['submit']))
{

$email=$_POST['email'];
$pass1=$_POST['pass'];
//echo $pass1;
$con=mysql_connect("localhost","root","golny23!") or die(mysql_error());
$db=mysql_select_db("sjb") or die(mysql_error());
$tab=mysql_query("select * from student where email='".$email."' AND pass ='".$pass1."'");
//echo "select * from student where email='".$email."' AND pass ='".$pass1."'";
$row=mysql_fetch_array($tab);

if(isset($row['name']))
{
 $_SESSION["emailid"]=$row['email'];
header("Location:student-profile.html");
 }
 else 
 {
 header("Location:theme-1/login.html");
 }

}

?>
