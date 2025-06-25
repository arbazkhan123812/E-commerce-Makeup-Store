<?php
   include('../Database/connection.php');
   include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Arbaz Electric Store</title>
    <meta name="keywords" content="electric store, electronics, appliances, fans, LED, smart home">
    <meta name="description" content="Explore Arbaz Electric Store for quality electric items, fans, LEDs, and smart appliances.">
    <meta name="author" content="Arbaz Electric Store">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search electric items...">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="noo-sh-title">We are <span>Arbaz Electric Store</span></h2>
                    <p>
                        Arbaz Electric Store is your one-stop destination for high-quality electrical appliances, gadgets, and components. Whether you're upgrading your home, setting up a workspace, or simply looking for reliable and energy-efficient solutions, we bring you a curated selection of modern electric products that combine durability, performance, and innovation.
                    </p>
                    <p>
                        From ceiling fans, LED lights, and switches to kitchen appliances, tools, and smart home devices, we offer a wide range of items to power your everyday life. Our goal is to make premium electric items accessible to everyone by providing trusted brands and excellent customer service at competitive prices.
                    </p>
                    <p>
                        At Arbaz Electric Store, we value safety, efficiency, and reliability. Every product is tested and selected with care to ensure that our customers receive the best. Whether you're an individual looking for home solutions or a contractor sourcing for projects, you'll find everything you need under one roof.
                    </p>
                    <p>
                        Explore our growing collection and light up your home or workplace with confidence and quality. Arbaz Electric Store — where power meets performance.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-thumbnail img-fluid" src="images/about-img.jpg" alt="Electric Products" />
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>We have built a reputation for offering only the most reliable and efficient electric items across Pakistan.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Our trained staff and expert sourcing ensure high standards in every product delivered to our customers.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>With years of experience in electrical goods, we understand what works best for homes and businesses alike.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

    <!-- Start Footer  -->
    <?php include('footer.php') ?>
    <!-- End Footer  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
