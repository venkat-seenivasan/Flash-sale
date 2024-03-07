<?php session_start();
include("db.php");
echo $uname=$_POST["uname"];
echo $pass=$_POST["pass"];


echo $etype=$_POST['etype'];

 				 
 $q=mysql_query("select * from tb_breg where uname='$uname' and pass='$pass' and etype='$etype'"); 
   
$r=mysql_fetch_array($q);
 
if($uname=="admin" && $pass=="admin"  && $etype=="Admin")
{
header("location:Adminhome.php");
}

else if($r['uname']==$uname && $r['pass']==$pass && $r['etype']=="Seller")
{
$_SESSION['uname'] = $r["uname"]; 
  
  $_SESSION['ename'] = $r["ename"]; 
 header("location:offerhome.php");

}

else if($r['uname']==$uname && $r['pass']==$pass && $r['etype']=="User")

{
echo  $_SESSION['uname'] = $r['uname'];
 $_SESSION['ename'] = $r["ename"]; 
header('location:userhome.php');
 
}



else
{
echo "Invalid User";

}	



i 
?>


 