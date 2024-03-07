<?php
include("db.php");
$qry = "SELECT id FROM tb_offer ORDER BY id DESC";
$set = mysql_query($qry);
$data = mysql_fetch_assoc($set);
$id1 = $data['id'];
$id = $id1 + 1;
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
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .txt {
            width: 200px;
            border: 1px solid #CCCCCC;
            border-radius: 3px;
            height: 25px;
            padding: 2px;


        }

        .txt1 {
            width: 200px;
            border: 1px solid #CCCCCC;
            border-radius: 3px;
            height: 100px;
            padding: 2px;


        }

        .lgnbtn {
            font: 15px 'Yanone Kaffeesatz', arial, sans-serif;
            border: 0;
            width: 99px;

            height: 42px;
            padding: 2px;
            cursor: pointer;
            background: #003366;
            -webkit-border-radius: .5em .5em .5em .5em;
            -moz-border-radius: .5em .5em .5em .5em;
            border-radius: .5em .5em .5em .5em;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            color: #FFF;
            border: solid 1px #0D8AA9;
            background: #46C4DD;
            background: -webkit-gradient(linear, left top, left bottom, from(#63CFDF), to(#17B2D9));
            background: -moz-linear-gradient(top, #63CFDF, #17B2D9);
            text-shadow: 1px 1px #178497;

        }

        .aaa {

            font: 140% 'Yanone Kaffeesatz', arial, sans-serif;
            border: 0;
            width: 99px;



            padding: 8px 8px 8px 5px;
            cursor: pointer;
            background: #1EC9F4;
            -webkit-border-radius: .5em .5em .5em .5em;
            -moz-border-radius: .5em .5em .5em .5em;
            border-radius: .5em .5em .5em .5em;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            color: #FFF;
            border: solid 1px #0D8AA9;
            background: #46C4DD;
            background: -webkit-gradient(linear, left top, left bottom, from(#63CFDF), to(#17B2D9));
            background: -moz-linear-gradient(top, #63CFDF, #17B2D9);
            text-shadow: 1px 1px #178497;

        }

        .loginhead3 {
            border: 1px solid #003366;
            border-radius: 10px 10px 0 0;
            width: 950px;
            height: 50px;
            background: #003366;
            color: #FFFFFF;
            margin-left: 0px;

        }

        .login3 {
            border: 1px solid #003366;
            border-top: 0px;
            width: 950px;
            height: auto;
            margin-left: 0px;

        }
    </style>
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <h1 style="font-size:14px">INSTANT AND MERCHANT FLASH SALE </h1>
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
                                    <h3>Email Us</h3>
                                    <p>offer@example.com</p>
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
                        <a href="sproduct.php" class="nav-item nav-link  ">OFFER PRODUCT UPLOAD </a>
                        <a href="sproductview.php" class="nav-item nav-link  ">OFFER PRODUCT VIEW </a>
                        <a href="spayment.php" class="nav-item nav-link  ">PAYMENT </a> <a href="suser.php"
                            class="nav-item nav-link  ">USER DETAILS </a> <a href="sreview.php"
                            class="nav-item nav-link  ">REVIEW </a>
                        <a href="index.php" class="nav-item nav-link  ">SIGN OUT </a>


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

    <div class="section-header1 text-center">

        <div class="loginhead3">

            <h2
                style="font-family:Arial, Helvetica, sans-serif   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px; font-size:25px">
                POST AD DETAILS</h2>


        </div>
        <div class="login3">
            <br>
            <center>
                <table width="100%" border="0" style="border-radius:4px;">

                    <tr>
                        <td>
                            <center>
                                <br />




                                <form name="myform" method="post" onsubmit="return validateform()"
                                    action="offerdata.php" enctype="multipart/form-data">
                                    <table width="90%" border="0" height="330px">
                                        <tr>


                                            <td>Ads Type</td>
                                            <td> <input name="s1" type="radio" value="Free" />Free
                                                <input name="s2" type="radio" value="Premium" />Premium
                                                <input name="id" type="hidden" id="id" class="txt"
                                                    value="<?php echo $id; ?>" required />
                                            </td>






                                            <td>Last Date</td>
                                            <td><label>

                                                    <input name="cat1" type="text" class="txt" id="text" required />

                                                </label></td </tr>
                                        <tr>
                                            <td> Offer Name </td>
                                            <td><input name="cname" type="text" class="txt" id="cname" required /></td>
                                            <td>City</td>
                                            <td> <select name="city" class="txt">
                                                    <option>Location</option>
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

                                                </select></td>

                                        </tr>
                                        <tr>

                                            <td>More Details </td>
                                            <td><input name="email" type="text" class="txt" id="email" required /></td>
                                            <td>Category</td>
                                            <td>
                                                <select name="cat" class="txt" required>
                                                    <option>Select Category</option>
                                                    <option>Mobile</option>
                                                    <option>Home Appliance</option>
                                                    <option>Laptop</option>
                                                    <option>Computer</option>
                                                    <option>Dress</option>
                                                    <option>Electronics</option>
                                                    <option>Books</option>
                                                    <option>Shoes</option>
                                                    <option>Furniture</option>
                                                    <option>Beauty & Personal Care</option>
                                                    <option>Jewelry</option>
                                                    <option>Health & Wellness</option>
                                                    <option>Toys & Games</option>
                                                    <option>Television</option>
                                                    <option>Sports & Outdoors</option>
                                                    <option>Food & Grocery</option>
                                                    <option>Stationery & Office Supplies</option>
                                                    <option>Automotive</option>
                                                    <option>Tools & Home Improvement</option>




                                                </select>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>Mobile No</td>
                                            <td><input name="phone" type="text" class="txt" id="phone" maxlength="10"
                                                    required /></td>
                                            <td>Price</td>
                                            <td>
                                                <input name="eday" type="text" class="txt" id="eday" required />



                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Posted Date </td>
                                            <td><input name="edate" type="text" class="txt" id="text" required /></td>

                                            <td>Upload Image</td>
                                            <td><label>
                                                    <input name="img1" type="file">

                                                </label></td>
                                        </tr>

                    </tr>

                </table>



            </center>
            </td>
            </tr>




            <tr>
                <td align="center">
                    <input name="save" type="submit" value="Register" class="lgnbtn" />

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
        <div class="container copyright">
            <p>&copy; <a href="#">All Right Reserved</p>
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