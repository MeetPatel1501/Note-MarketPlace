<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 ,user-scalable=no">
    <title>Notes MarketPlace</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="image/favicon/favicon.ico">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive css-->
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

    <!-- Header-->
    <header>
        <nav class="navbar navbar-fixed-top white-nav-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">
                    <div class="navbar-header">

                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn">&#9776;</span>

                        <!-- Logo-->
                        <a href="#user-profile" class="navbar-brand">
                            <img src="/image/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <!--Main Menu-->
                    <div class="container abc">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="smooth-scroll" href="search.php">Search Notes</a></li>
                                <li><a class="smooth-scroll" href="dashboard-1.php">Sell Your Notes</a></li>
                                <li><a class="smooth-scroll" href="faq.php">FAQ</a></li>
                                <li><a class="smooth-scroll" href="contact-us.php">Contact Us</a></li>
                                <li><a class="smooth-scroll" href="login.php"><button type="submit" href="#"class="btn2 btn-default">Login</button></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li><a class="smooth-scroll" href="search.php">Search Notes</a></li>
                                <li><a class="smooth-scroll" href="dashboard-1.php">Sell Your Notes</a></li>
                                <li><a class="smooth-scroll" href="faq.php">FAQ</a></li>
                                <li><a class="smooth-scroll" href="contact-us.php">Contact Us</a></li>
                                <li><a class="smooth-scroll" href="login.php"><button type="submit" href="#"class="btn2 btn-default">Login</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home page -->
    <section id="home">

        <div class="container container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div id="instruction" class="text-left">
                        <h1>Download Free/Paid Notes <br> or Sale your Book</h1>
                        <p>Lorem ipusm has been the industry's standard dummy text ever sinch the <br> 1500s,when an unknown printer took a gallery of type.</p>
                        <a href="faq.php">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="about">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <!-- about left side -->
                    <div class="col-md-6 col-sm-6">

                        <div id="about-left">
                            <div class="horizontal-heading">
                                <h2>About <br> NotesMarketPlace</h2>
                            </div>
                        </div>
                    </div>
                    <!-- about right side -->
                    <div class="col-md-6 col-sm-6">

                        <div id="about-right">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda molestiae
                                tempora atque, modi nobis illo consequuntur obcaecati ipsum earum sapiente totam
                                iusto, optio, amet ipsa aliquid cupiditate nihil fuga pariatur.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam exercitationem ea,
                                tempora, provident minus facilis laudantium aliquid nobis. Repudiandae sunt,
                                molestias .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="horizontal-heading text-center">
                            <h2>How it Works</h2>
                        </div>
                    </div>
                    <!-- work left-->
                    <div class="col-md-6">
                        <div id="work-left text-center">
                           <div class="download"> <a href="#"><img src="/image/home/download.png" alt="downlaod" class="img-responsive"></a></div>
                           <div class="work-left text-center">
                                <h4>Download Free/Paid Notes</h4>
                                <p>Get Meterial for your<br>Course etc.</p>
                                <button type="submit" href="#" class="btn3 btn-default">Download</button>
                            </div>
                        </div>
                    </div>
                    <!-- work right-->
                    <div class="col-md-6">
                        <div id="work-right text-center">
                            <div class="seller"><a href="#"><img src="/image/home/seller.png" alt="seller" class="img-responsive"></a></div>
                            <div class="work-right text-center">
                                <h4>Seller</h4>
                                <p>Upload and Download Course<br>and materials etc.</p>
                                <button type="submit" href="#" class="btn3 btn-default">sell book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="customers">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="horizontal-heading text-center">
                            <h2>What our Customers are Saying</h2>
                        </div>
                    </div>
                    <!-- coustomer left-->
                    <div class="col-md-6">
                        <!-- customer1 -->
                        <div class="customer">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/image/home/customer-1.png" alt="customer1" class="img-responsive">
                                </div>
                                <div class="col-md-9">
                                    <div class="intro">
                                        <h4>Walter Meller</h4>
                                        <p>Founder & CEO,Matrix Group</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, officia assumenda ex repellat voluptate necessitatibus quasi magni quae laudantium sed sint est enim."</p>
                                </div> 
                            </div>
                        </div>
                        <div class="customer">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/image/home/customer-3.png" alt="customer3" class="img-responsive">
                                </div>
                                <div class="col-md-9">
                                    <div class="intro">
                                        <h4>Amilia Luna</h4>
                                        <p>Teacher,Saint Joseph High School</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, officia assumenda ex repellat voluptate necessitatibus quasi magni quae laudantium sed sint est enim."</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- customer right -->
                    <div class="col-md-6">
                        <div class="customer">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/image/home/customer-2.png" alt="customer2" class="img-responsive">
                                </div>
                                <div class="col-md-9">
                                    <div class="intro">
                                        <h4>Jonnie Riley</h4>
                                        <p>Employee,Curious Snakcs</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, officia assumenda ex repellat voluptate necessitatibus quasi magni quae laudantium sed sint est enim."</p>
                                </div> 
                            </div>
                        </div>
                        <div class="customer">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/image/home/customer-4.png" alt="customer4" class="img-responsive">
                                </div>
                                <div class="col-md-9">
                                    <div class="intro">
                                        <h4>Daniel Cardos</h4>
                                        <p>Software Engineer,infinitum Company</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, officia assumenda ex repellat voluptate necessitatibus quasi magni quae laudantium sed sint est enim."</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6" class="text-left">
                    <p>
                        Copyright &copy; TatvaSoft All rights reserved. <span>SOLO Inc.</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="social-list text-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <!-- Custom jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>