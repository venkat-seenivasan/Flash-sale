<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$rs=mysql_query("select * from tb_breg where uname='$uname' and pass='$pass'");
$r=mysql_fetch_array($rs);

$n=mysql_num_rows($rs);
if($r['uname']==$uname && $r['pass']==$pass)
{
	 
 $_SESSION['uname'] = $r["uname"]; 
  
  $_SESSION['ename'] = $r["ename"]; 
 header("location:offerhome.php");
}

 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 