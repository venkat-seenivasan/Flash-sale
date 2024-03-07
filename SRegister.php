<?php
include("db.php");
$q = "select Max(id) as id from tb_breg";
$res = mysql_query($q);
$row = mysql_fetch_array($res);
$id1 = $row["id"] +1;
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
  padding: 2px ;
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
width:550px;
height:50px;
 background:#003366; 
color:#FFFFFF;
margin-left:0px;

}
 .login3
{
border:1px solid  #003366;
border-top:0px;
width:550px;
height:auto;
margin-left:0px;

}
</style>
<script>
  
function validate()
{

var mobile=document.register.mobile;
  


if(mobile.value == "")
{
alert("Enter Phone Number");
mobile.focus();
return false;
}

var re1=/^[0-9]+$/;
	
	
if( document.register.mobile.value.length >=1 && document.register.mobile.value.length <=9 || document.register.mobile.value.length >=11 || !re1.test(document.register.mobile.value))
{
     alert( "Please provide a Valid contact no." );
	 document.register.mobile.style.borderColor="green";
     document.register.mobile.focus() ;
     return false;
}
if(email.value == "")
{
alert("Enter Email Id");
email.focus();
return false;
}

var mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(!mail.test(document.register.email.value))
   {
     alert( "Please provide a Valid Email Id." );
	 document.register.email.style.borderColor="green";
     document.register.email.focus() ;
     return false;
   }
   
   
var pw = document.getElementById("pass").value;  
var pw1 = document.getElementById("pass1").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  }  
  
 	 
  if(pw != pw1)
  {	
  	alert("Passwords did not match");
	return false;
  } 
  else
   {
  	alert("Password created successfully");
	 return true;
  }

 
}




</script>
    </head>

    <body>
	<form action="sregdata.php" method="post" name="register" onSubmit="return validate()"  enctype="multipart/form-data">
	
	  
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
                        <div class="navbar-nav mr-auto">   <a href="index.php" class="nav-item nav-link ">HOME</a>
						        <a href="SRegister.php" class="nav-item nav-link active">REGISTER</a>
                            <a href="user.php" class="nav-item nav-link">LOGIN</a>    
							 <a href="gallery.php" class="nav-item nav-link">GALLERY</a>                            
                             
                            <a href="contact.html" class="nav-item nav-link">CONTACT</a>   
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
         
                <div class="section-header1 text-center" style="margin-left:500px"  >
                    
                   <div class="loginhead3" >

		 <h2 style="font-family:Arial, Helvetica, sans-serif   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #fff;  margin-right: 2px; font-size:40px" > REGISTRATION</h2>

		 
		</div>
		<div class="login3"  >
		<br>
		<center>
		 
	    <table width="80%" height="600px" border="0" bgcolor="#FFFFFF" >
   
                                
                              
                                
  <tr>
    <td width="50%"> Name </td>
    <td> 
                                <input name="ename" type="text" class="txt" id="ename" required size="45">  <input name="id" type="hidden" class="txt" id="id"  value="<?php echo $id1?>">
     </td>
  </tr>
  <tr>
    <td  >Gender </td>
    <td>
      <input name="gender" type="radio" value="Male">
      Male 
      <input name="gender" type="radio" value="Female">
      Female
	  
	   
	  </label></td>
  </tr>
  <tr>
    <td >Contact No. </td>
    <td> 
                                <label>
                                  <input name="mobile" type="text"  class="txt" id="mobile" required maxlength="10"
                                </label></td>
  </tr>
  <tr>
    <td>Address</td>
    <td height="55"> 
      <textarea name="address" class="txt1" id="address" required></textarea>
      </label></td>
  </tr>
  <tr>
    <td  >City</td>
    <td>   
      <select name="city" class="txt">
        <option>Select City</option>
		<option>Ariyalur</option>
<option>Chengalpattu</option>
<option>Chennai</option>
<option>Coimbatore</option>
<option>Cuddalore</option>
<option>Dharmapuri</option>
<option>Dindigul</option>
<option>Erode</option>
<option>Kallakurichi</option>
<option>Kanchipuram</option>
<option>Kanyakumari</option>
<option>Karur</option>
<option>Krishnagiri</option>
<option>Madurai</option>
<option>Nagapattinam</option>
<option>Namakkal</option>
<option>Nilgiris</option>
<option>Perambalur</option>
<option>Pudukkottai</option>
<option>Ramanathapuram</option>
<option>Ranipet</option>
<option>Salem</option>
<option>Sivaganga</option>
<option>Tenkasi</option>
<option>Thanjavur</option>
<option>Theni</option>
<option>Thoothukudi</option>
<option>Tiruchirappalli</option>
<option>Tirunelveli</option>
<option>Tirupathur</option>
<option>Tiruppur</option>
<option>Tiruvallur</option>
<option>Tiruvannamalai</option>
<option>Tiruvarur</option>
<option>Vellore</option>
<option>Viluppuram</option>
<option>Virudhunagar</option>
      </select>
                           </td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td> 
       
         
                               
                                <input name="email" type="email" class="txt" id="email" required>
                                </td>
  </tr>
  <tr>
    <td valign="top">User Name </td>
    <td  valign="top" > 
    <input name="uname" type="text" class="txt" id="uname" required  pattern="[a-z]{4,50}"  > 
	 
	 
       
         </td>
  </tr>

  <tr>
    <td>Password</td>
    <td> 
        <input name="pass" type="password" class="txt" id="pass" required><br>
        <span id="message" style="color:red"></span> 
    </td>
</tr>




  <tr>
    <td>Confirm Password</td>
    <td> 
    <input name="pass" type="password" class="txt" id="pass1" required ><br>
 
       
        </td>
  </tr>
  <tr>
    <td height="61">Type</td>
    <td>   
      <select name="etype" class="txt">
        <option>Select Type</option>
		 <option>Free</option>
		  <option>Premium</option>
		 
			 
      </select>
                           </td>
  </tr>
  
  <tr>
    <td height="61">User  Type</td>
    <td>   
      <select name="etype1" class="txt">
        <option>Select User Type</option>
		 <option>Seller</option>
		  <option>User</option>
		 
			 
      </select>
                           </td>
  </tr>
   <tr>
    <td>Upload Photo</td>
    <td> 
     <input name="img1" type="file" required>
       
         </td>
  </tr>
   <tr>
  
  <tr>
   
    <td colspan="2">
	 
      <div align="center">
        <input type="submit" class="lgnbtn" value="SUBMIT" onSubmit="return validate()" >  
 </div>
     </td>
  </tr>
</table>
	  
	   
		 
		       
  
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
