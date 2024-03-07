 <?php 
  include("db.php");
  
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>INSTANT AND MERCHANT FLASH SALE MONITORING SYSTEM </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		<link  href="css/styletable.css" type="text/css" rel="stylesheet" />
 
<script type='text/javascript' src='css/slimtable.min.js'></script>
<style>
.txt
{
width:200px;
border:1px solid #CCCCCC;
border-radius:3px;
height:25px;
padding:2px;


}
.txt1
{
width:200px;
border:1px solid #CCCCCC;
border-radius:3px;
height:100px;
padding:2px;


}
.lgnbtn
{
	font: 15px 'Yanone Kaffeesatz', arial, sans-serif; 
  border: 0; 
  width: 99px; 
 
  height: 42px;
  padding: 10px 10px 10px 10px;
  cursor: pointer; 
  background:#003366; 
  -webkit-border-radius: .5em .5em .5em .5em ; 
  -moz-border-radius: .5em .5em .5em .5em ;
  border-radius: .5em .5em .5em .5em ;
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  box-shadow: 0 1px 2px rgba(0,0,0,.2);  
  color: #FFF;
  border: solid 1px #0D8AA9;
  background: #46C4DD;
  background: -webkit-gradient(linear, left top, left bottom, from(#63CFDF), to(#17B2D9));
  background: -moz-linear-gradient(top,  #63CFDF,  #17B2D9);
  text-shadow: 1px 1px #178497;

}

.aaa
{
 
  font: 140% 'Yanone Kaffeesatz', arial, sans-serif; 
  border: 0; 
  width: 99px; 
   
 
  
  padding: 8px 8px 8px 5px;
  cursor: pointer; 
  background: #1EC9F4; 
  -webkit-border-radius: .5em .5em .5em .5em ; 
  -moz-border-radius: .5em .5em .5em .5em ;
  border-radius: .5em .5em .5em .5em ;
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  box-shadow: 0 1px 2px rgba(0,0,0,.2);  
  color: #FFF;
  border: solid 1px #0D8AA9;
  background: #46C4DD;
  background: -webkit-gradient(linear, left top, left bottom, from(#63CFDF), to(#17B2D9));
  background: -moz-linear-gradient(top,  #63CFDF,  #17B2D9);
  text-shadow: 1px 1px #178497;

}
.loginhead3
{
border:1px solid #003366;
border-radius:10px 10px 0 0;
width:500px;
height:50px;
 background:#003366; 
color:#FFFFFF;
margin-left:0px;

}
 .login3
{
border:1px solid  #003366;
border-top:0px;
width:500px;
height:auto;
margin-left:0px;

}
</style>
<script type="text/JavaScript">

function MM_jumpMenu(targ,selObj,restore){ 
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

</script>
    </head>

    <body>
        <!-- Top Bar Start -->
         <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html"> <h1 style="font-size:14px">INSTANT AND MERCHANT FLASH SALE  </h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+91-8989598998</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>  <p>offer@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
         <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
						     <a href="invehicle.php" class="nav-item nav-link  ">QR Code Scan</a>  
				  <a href="insurance.php" class="nav-item nav-link  ">Vehicle  Insurance Renewal/Apply</a> 
 					 <a href="status.php" class="nav-item nav-link  ">Status </a> 
				     <a href="index.php" class="nav-item nav-link  ">Sign Out </a>   
						
						
						 
					 
                        </div>
                         
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <br>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
         
                <div class="section-header1 text-center" style="margin-left:400px"  >
                    
                   <div class="loginhead3" >
<h2 style="font-family:Arial, Helvetica, sans-serif   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px; font-size:25px">Vehicle  Insurance Renewal/Apply</h2>
		 
		 
		</div>
		<div class="login3"  >
		<br>
		<center>
		 
			 <form name="register" onSubmit="return validate()"  enctype="multipart/form-data" action="insdata.php" method="post">
 <table width="70%" border="0" height="400px" bgcolor="#003300" >
	   <tr>
	   <td>
	  
      <center>
     
      <table width="382" height="400" border="0" align="center">
       
		<tr>
    <td width="199"><span class="style15 style8"><strong>Select Vehicle </strong></span></td>
    <td width="173"><label>
	
       <select  name="jobs" class="text"  onchange="MM_jumpMenu('parent',this,0)">
	 <option>Select Vehicle NO</option>
		 <?php
		   
			  $q5=mysql_query("select * from tb_vehicle ");
				while($r=mysql_fetch_assoc($q5))

			{
				 echo "<option value=insurance.php?id=".$r['id'].">".$r['id']."</option>";
								}
								$id=$_REQUEST['id'];	
		 
		   ?>	
	 </select>
 <?php $result = mysql_query("SELECT * FROM tb_vehicle where id='$id' ");
$row1= mysql_fetch_array($result);
?>   
    </label></td>
  </tr>
		 <tr>
        <td><span class="style15 style8"><strong>Apply Date </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="odate" type="date" id="odate"   required class="txt"/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Vehicle No </strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proid" type="text" id="proid"  value="<?php echo $row1['id'];?>" required class="txt"/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Vehicle Name</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="proname" type="text" id="proname" class="txt"  value="<?php echo $row1['ename'];?>" required/>
          </label>
        </span></td>
      </tr>
        <tr>
        <td><span class="style15 style8"><strong>Vehicle Type</strong></span></td>
        <td><span class="style8">
            <input name="qty" type="text" id="qty" class="txt" value="<?php echo $row1['etype'];?>" required/>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Model</strong></span></td>
        <td><span class="style8">
            <input name="price" type="text" id="price"  value="<?php echo $row1['vtype'];?>" required/>
        </span></td>
      </tr>
      <tr>
        <td><span class="style15 style8"><strong>Model Year</strong></span></td>
        <td><span class="style8">
          <label>
          <input name="protype" type="text" id="protype" class="txt" value="<?php echo $row1['year'];?>" required/>
          </label>
        </span></td>
      </tr>
	  
	  <tr>
    <td width="199"><span class="style15 style8"><strong>Insurance </strong></span></td>
    <td width="173"><label>
	
       <select  name="jobs" class="text"   class="txt">
	 <option>Select Status</option>
	  <option>Apply</option>
	   <option>Renewal</option>
		 
	 </select>
    
    </label></td>
  </tr>
      
     
	 
	   <tr>
      
        <td colspan="2" align="center"><label>
          <input type="submit" name="Submit" value="Submit" class="lgnbtn" />
		  <input type="reset" name="Reset" value="Reset"  class="lgnbtn" />
        </label></td>
      </tr>
    </table>  </form>    </td>
  </tr>
</table>
		 
   

    
		
		
		</center>
		 
  
<br> <br>
</center>

		</div>
    
        

        
      </div>

                </div>
                 
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="footer">
             <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Trichy</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>ecommerce@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="container copyright"> <p>&copy; <a href="#">All Right Reserved</p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
