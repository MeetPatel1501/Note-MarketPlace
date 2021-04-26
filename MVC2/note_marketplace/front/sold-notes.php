<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Header-->
    <?php 
    
        if(isset($_SESSION['email']))
        {
            include 'header2.php';

        }else{
            
            include 'header1.php';
        }
    ?>


    <section id="my-sold-notes">
        <div class="content-box-lg">
            <div class="container conatiner-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-heading" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                            <div class="left-heading"><h5>My Sold Notes</h5></div>
                            <div class="right-heading">
                                <form class="search" action="/action_page.php">
                                    <img src="image/dashboard/search-icon.png" alt="logo" class="img-responsive search-img">
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
                                    <td><img src="image/download/eye.png"></td>
                                    <td class="two">
                                        
                                        <div class="dropdown">
                                            <a class="dot-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="image/download/dots.png">
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li class="presentation"><a role="menuitem" tabindex="-1" href="#">Download Note</a></li>
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
    <?php include 'footer.php'; ?>

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