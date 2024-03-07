<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
 
if($uname=="insurance" && $pass=="123")
{
	 
  
  
 header("location:inshome.php");
}

 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 