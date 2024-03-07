<?php
 mysql_connect("localhost", "root" ,"") or die("Connection Error"); 
mysql_select_db("offer") or die("Database Error"); 
echo $id=$_GET['id'];

$result=mysql_query("delete from tb_offer where id='$id'");

 header('location:sproductview.php');
?>