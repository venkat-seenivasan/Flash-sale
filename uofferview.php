<?php
session_start();
include("db.php");
$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INSTANT AND MERCHANT FLASH SALE MONITORING SYSTEM</title>
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
            font: 14px 'Yanone Kaffeesatz', arial, sans-serif;
            border: 0;
            width: 100px;
            height: 42px;
            padding: 2px;
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
                            <h1 style="font-size:14px">INSTANT AND MERCHANT FLASH SALE</h1>
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
                                    <h3>Mega Offer</h3>
                                    <p>Sat - Sun, 20:00 - 4:00</p>
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
                                    <p>+91-9360994122</p>
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
                                    <p>offer_svt_@example.com</p>
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
                        <a href="uofferview.php" class="nav-item nav-link active">OFFER VIEW</a>
                        
                        <a href="preuser.php" class="nav-item nav-link ">PREMIUM USER</a>
                        <a href="index.php" class="nav-item nav-link ">SIGN OUT</a>
                       
                        <div style="text-align:right; margin-left:550px; color:#FFFF00">
                            <a href="uofferview.php" class="nav-item nav-link">
                                <?php
                                $a = date('d-m-Y');
                                $rs = mysql_query("select count(id) as a from tb_offer where edate='$a'");
                                $r = mysql_fetch_array($rs);
                                $id1 = $r['a'];
                                "Notification Product:" . $id1;
                                ?>
                                <img src="img/alert.png" height="35px" style="border-radius:60px"> &nbsp;&nbsp;&nbsp;
                                <font size="5">Ads:
                                    <?php echo $id1; ?>
                            </a>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Page Header Start -->

    <!-- Page Header End -->

    <!-- Contact Start -->
    <table style="width:100%; border:solid 0px; height:auto">
        <tr>
            <td>
                <div class="team">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>PRODUCT SALES OFFER</p>
                        </div>
                        <form action="" method="GET" class="form-inline mb-3">
    <div class="input-group mr-3">
        <input type="text" name="search" class="form-control" placeholder="Search for specific offer...">
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
    <div class="form-group">
        <select class="form-control" name="filter_etype" id="filter_etype">
                                    <option value="">Filter by etype</option>
                                    <option value="Mobile">Mobile</option>
                                    <option value="Home Appliance">Home Appliance</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Dress">Dress</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Books">Books</option>
                                    <option value="Shoes">Shoes</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                                    <option value="Jewelry">Jewelry</option>
                                    <option value="Health & Wellness">Health & Wellness</option>
                                    <option value="Toys & Games">Toys & Games</option>
                                    <option value="Television">Television</option>
                                    <option value="Sports & Outdoors">Sports & Outdoors</option>
                                    <option value="Food & Grocery">Food & Grocery</option>
                                    <option value="Stationery & Office Supplies">Stationery & Office Supplies</option>
                                    <option value="Automotive">Automotive</option>
                                    <option value="Tools & Home Improvement">Tools & Home Improvement</option>
                                    <!-- Add other options for etype -->
                                    </select>
    </div><br>
   
</form>

<script>
    document.getElementById('filter_etype').addEventListener('change', function () {
        var search = document.querySelector('[name="search"]').value;
        var filter_etype = this.value;
        var url = window.location.href.split('?')[0]; // Get current URL without query string
        var params = new URLSearchParams(window.location.search);

        if (search) {
            params.set('search', search);
        } else {
            params.delete('search');
        }
        if (filter_etype) {
            params.set('filter_etype', filter_etype);
        } else {
            params.delete('filter_etype');
        }

        window.location.href = url + '?' + params.toString();
    });
</script>

<div class="row">
    <?php
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $filter_etype = isset($_GET['filter_etype']) ? $_GET['filter_etype'] : '';
    $filter_date = isset($_GET['filter_date']) ? $_GET['filter_date'] : '';
    $current_date = date('Y-m-d');
    $found_offers = false;

    // Construct the query based on search and filter options
    $query = "SELECT * FROM tb_offer WHERE sta='Free'";
    if (!empty($search)) {
        $query .= " AND (ename LIKE '%$search%' OR edesc LIKE '%$search%' OR etype LIKE '%$search%')";
    }
    if (!empty($filter_etype)) {
        $query .= " AND etype = '$filter_etype'";
    }
    if (!empty($filter_date)) {
        // Assuming eday is in date format in the database
        $query .= " AND eday >= '$filter_date'";
    }
    $query .= " ORDER BY id DESC";
    
    $result = mysql_query($query);

    while ($row = mysql_fetch_array($result)) {
        $im = $row['img'];
        $expiration_date = date('d-m-Y', strtotime($row['eday']));

        // Check if the current date is before the expiration date
        if (strtotime($current_date) <= strtotime($expiration_date)) {
            $found_offers = true;
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <a href="home/<?php echo $im; ?>"><img src="home/<?php echo $im; ?>" alt="Team Image"
                                style="height:200px;"></a>
                    </div>
                    <div class="team-text">
                        <h3 style="color:#FFFF00; font-weight:bold; font-size:16px"><?php echo $row['ename']; ?>
                        </h3>
                        <h3 style="color:#FFFFFF;font-size:16px;font-weight:bold;"><?php echo $row['edesc']; ?>
                        </h3>
                        <h3 style="color:#FFFF00; font-size:16px"><?php echo $row['etype']; ?>&nbsp; </h3>
                        <h3 style="color:#FFFFFF;font-size:16px;font-weight:bold;"><?php echo "Offer Price:" . $row['vtype']; ?>
                        </h3>
                        <h3 style="color:#FFFF99; font-size:16px">Phone :<?php echo $row['phone']; ?> &nbsp; </h3>
                        <h3 style="color:#FFFF99; font-size:16px">Last Date :<?php echo $row['eday']; ?> &nbsp; </h3>
                        <br>
                        <h3 style="color:#FFFF99;font-size:16px;font-weight:bold;">
                            <?php echo '<a href="review.php?id=' . $row["id"] . '" style="background:#00CC66; color:#FFFFFF; padding:10px; text-decoration:none; border-radius:15px">REVIEW</a>'; ?>
                        </h3>
                        
                       
                        <div class="team-social"></div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    // Display a message if no offers are found
    if (!$found_offers && (!empty($search) || !empty($filter_etype) || !empty($filter_date))) {
        ?>
        <div class="col-lg-12">
            <p>No offers found for your search and filter criteria.</p>
        </div>
        <?php
    }
    ?>
</div>
            </td>
        </tr>
    </table>
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
            <p>&copy; <a href="#">All Right Reserved</a></p>
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
