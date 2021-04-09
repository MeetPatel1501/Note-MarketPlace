<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

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
        <nav class="navbar navbar-fixed-top white-nav-top nav-notes">
            <div class="container-fluid">
                <div class="site-nav-wrapper">
                    <div class="navbar-header">

                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn">&#9776;</span>

                        <!-- Logo-->
                        <a href="home.php" class="navbar-brand1">
                            <img src="/image/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <!--Main Menu-->
                    <div class="container abc">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="smooth-scroll" href="search.php">Search Notes</a></li>
                                <li><a class="smooth-scroll" href="dashboard-1.php">Sell Your Notes</a></li>
                                <li><a class="smooth-scroll" href="buyer-requests.php">Buyer Requests</a></li>
                                <li><a class="smooth-scroll" href="faq.php">FAQ</a></li>
                                <li><a class="smooth-scroll" href="contact-us.php">Contact Us</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a class="user-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/image/user-profile/user-img.png">
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="user-profile.php">My Profile</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="download.php">My Download</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="sold-notes.php">My Sold Notes</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="rejected-notes.php">My Rejected Notes</a></li>
                                            <li class="presentation"><a class="purple" role="menuitem" tabindex="-1" href="login.php">LOGOUT</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="smooth-scroll" href="login.php"><button type="submit" href="login.php"class="btn2 btn-default">Logout</button></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav text-left">
                                <li><a class="smooth-scroll" href="search.php">Search Notes</a></li>
                                <li><a class="smooth-scroll" href="sold-notes.php">Sell Your Notes</a></li>
                                <li><a class="smooth-scroll" href="buyer-requests.php">Buyer Requests</a></li>
                                <li><a class="smooth-scroll" href="faq.php">FAQ</a></li>
                                <li><a class="smooth-scroll" href="contact-us.php">Contact Us</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a class="user-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/image/user-profile/user-img.png" style="margin-left: 20px;">
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="user-profile.php">My Profile</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="download.php">My Download</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="sold-notes.php">My Sold Notes</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="rejected-notes.php">My Rejected Notes</a></li>
                                            <li class="presentation"><a class="purple" role="menuitem" tabindex="-1" href="login.php">LOGOUT</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="smooth-scroll" href="login.php"><button type="submit" href="#"class="btn2 btn-default">Logout</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="feedback-popup">
        <div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="popup1-Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="popup1-header">
                        <h6>Add Review</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="popup1-body">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div> 
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Comments*</label>
                            <textarea required class="form-control" id="message-text" placeholder="Comments..."></textarea>
                        </div>
                        <button type="button" class="feedback-button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="my-download">
        <div class="content-box-lg">
            <div class="container conatiner-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-heading" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                            <div class="left-heading"><h5>My Download</h5></div>
                            <div class="right-heading">
                                <form class="search" action="/action_page.php">
                                    <img src="/image/dashboard/search-icon.png" alt="logo" class="img-responsive search-img">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit">Search</button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <section id="table">
        <div class="content-box-lg">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12" style="overflow: auto;">
                        <table class="table">
                            <thead>
                              <tr >
                                <th scope="col">SR NO.</th>
                                <th scope="col">NOTE TITLE</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">BUYER</th>
                                <th scope="col">SELL TYPE</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">DOWNLOAD DATE/TIME</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Data Science</td>
                                    <td>Science</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$250</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Accounts</td>
                                    <td>Commerce</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>Social Studies</td>
                                    <td>Social</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>AI</td>
                                    <td>It</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$158</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>Data Science</td>
                                    <td>Science</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$555</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">7</td>
                                    <td>Accounts</td>
                                    <td>Commerce</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">8</td>
                                    <td>Social Studies</td>
                                    <td>Social</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">9</td>
                                    <td>AI</td>
                                    <td>IT</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$250</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">10</td>
                                    <td>Lorem ipusm</td>
                                    <td>Lorem</td>
                                    <td>testting123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$115</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td><img src="/image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#popup1">Add Reviews/Feedback</a></li>
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination1 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1 aria-label="Previous">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">4</a></li>
                              <li class="page-item"><a class="page-link" href="#">5</a></li>
                              <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                                    </a>
                              </li>
                            </ul>
                        </nav>
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

    <!-- Popper -->
    <script src="js/popper/popper.min.js"></script>

    <!-- Custom jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>