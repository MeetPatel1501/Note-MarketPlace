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
   
    <section id="dashboard">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard-heading">
                            <div class="item1"><h4>Dashboard</h4></div>
                            <div class="item1"><button type="button">Add Notes</button></div>
                        </div>
                    </div>
                     
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-box">
                            <div class="col-md-3">
                                <div class="box1">
                                    <img src="image/dashboard/my-earning.png" alt="earning" class="img-responsive">
                                    <h5>My Earning</h5>
                                </div>
                            </div>
                            <div class="col-md-4 b">
                                <div class="box2">
                                    <h4>100</h4>
                                    <p>Number of Notes Sold</p>
                                </div>
                            </div>
                            <div class="col-md-5 b">
                                <div class="box3">
                                    <h4>$10,00,000</h4>
                                    <p>Money Earned</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-box text-center">
                            <div class="col-md-4">
                                <div class="box4">
                                    <h4>38</h4>
                                    <p>My Downloads</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box5">
                                    <h4>12</h4>
                                    <p>My Rejected Notes</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box6">
                                    <h4>102</h4>
                                    <p>Buyer Requests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="progress-note">
        <div class="content-box-lg">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="publish-heading">
                            <div class="item"><h5>In Progress Notes</h5></div>
                            <div class="item">
                                <form class="progress-search" action="/action_page.php">
                                    <img src="image/dashboard/search-icon.png" alt="logo" class="img-responsive search-img">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit">Search</button>
                                </form>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                              <tr >
                                <th scope="col">ADDED DATE</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">ACTIONS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td scope="row">09-10-2020</td>
                                <td class="align-middle">Data Science</td>
                                <td>Science</td>
                                <td>Draft</td>
                                <td>
                                    <img src="image/dashboard/edit.png">
                                    <img src="image/dashboard/delete.png">
                                </td>
                              </tr>
                              <tr>
                                <td scope="row">10-10-2020</td>
                                <td>Accounts</td>
                                <td>Commerce</td>
                                <td>In Review</td>
                                <td><img src="image/dashboard/eye.png"></td>
                              </tr>
                              <tr>
                                <td scope="row">11-10-2020</td>
                                <td>Social Studies</td>
                                <td>Social</td>
                                <td>Submitted</td>
                                <td><img src="image/dashboard/eye.png"></td>
                              </tr>
                              <tr>
                                <td scope="row">12-10-2020</td>
                                <td>AI</td>
                                <td>IT</td>
                                <td>Submitted</td>
                                <td><img src="image/dashboard/eye.png"></td>
                              </tr>
                              <tr>
                                <td scope="row">13-10-2020</td>
                                <td>Lorem ipsum dolor sit ametsectetur</td>
                                <td>Lorem</td>
                                <td>Draft</td>
                                <td>
                                    <img src="image/dashboard/edit.png">
                                    <img src="image/dashboard/delete.png">
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

    <section id="published-notes">
        <div class="content-box">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="publish-heading">
                            <div class="item"><h5>Published Notes</h5></div>
                            <div class="item">
                                <form class="progress-search" action="/action_page.php">
                                    <img src="image/dashboard/search-icon.png" alt="logo" class="img-responsive search-img">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit">Search</button>
                                </form>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ADDED DATE</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">SELL TYPE</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">ACTIONS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td scope="row">09-10-2020</td>
                                <td>Data Science</td>
                                <td>Science</td>
                                <td>Paid</td>
                                <td>$575</td>
                                <td>
                                    <img src="image/dashboard/eye.png">
                                </td>
                              </tr>
                              <tr>
                                <td scope="row">10-10-2020</td>
                                <td>Accounts</td>
                                <td>Commerce</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td><img src="image/dashboard/eye.png"></td>
                              </tr>
                              <tr>
                                <td scope="row">11-10-2020</td>
                                <td>Social Studies</td>
                                <td>Social</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td><img src="image/dashboard/eye.png"></td>
                              </tr>
                              <tr>
                                <td scope="row">12-10-2020</td>
                                <td>AI</td>
                                <td>IT</td>
                                <td>Paid</td>
                                <td>$3542</td>
                                <td><img src="image/dashboard/eye.png"></td>
                              </tr>
                              <tr>
                                <td scope="row">13-10-2020</td>
                                <td>Lorem ipsum dolor sit ametsectetur</td>
                                <td>Lorem</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>
                                    <img src="image/dashboard/eye.png">
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