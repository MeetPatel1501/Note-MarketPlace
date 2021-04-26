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
        if (isset($_SESSION['email'])) {

            include 'header2.php';

        } else {
            
            include 'header1.php';
        }
    ?>

    <!-- Search page -->
    <section id="search">

        <div class="container container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div id="search-statment" class="text-center">
                        <h1>Search Note</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="search-filter">

        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="horizontal-heading text-left">
                        <h3>Search and Filter notes</h3>
                    </div>
                    <div class="search-filter">
                        <form class="search-bar">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            <input type="text" placeholder="Search notes here..." name="search">
                        </form>

                        <from class="filter">
                            <div class="row">
                                <div class="col-md-2">
                                    <select id="type">
                                        <option value="type">Select type</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="category">
                                        <option value="category">Select category</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="university1">
                                        <option value="university">Select university</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="course">
                                        <option value="course">Select course</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="country1">
                                        <option value="country">Select country</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="rating">
                                        <option value="rating">Select rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </from>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="notes">
        <div class="container container-fluid">
            <div class="horizontal-heading text-left">
                <h3>Total 18 notes</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search1.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Computer Operating System-Final Exam Book With Paper Solution</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university" class="img-responsive"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page" class="img-responsive"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date" class="img-responsive"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag" class="img-responsive"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search2.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Computer Science</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search3.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Basic Computer Engineering Tech India Publication Series</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search4.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Computer Science Illuminted-Seventh Edition</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search5.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>The Principles of Computer Hardware-Oxford</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search6.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>The Computer Book</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search1.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Computer Operating System-Final Exam Book With Paper Solution</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search2.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Computer Science</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="image/search/search3.png" alt="search1" class="img-reponsive img-center img-book">
                        <div class="card-body">
                            <h4>Basic Computer Engineering Tech India Publication Series</h4>
                            <ul class="note-detail">
                                <li><img src="image/search/university.png" alt="university"><span>University of California,Us</span></li>
                                <li><img src="image/search/pages.png" alt="page"><span>204 Pages</span></li>
                                <li><img src="image/search/date.png" alt="date"><span>Thu,Nov 26 2020</span></li>
                                <li><img src="image/search/flag.png" alt="flag"><span>5 Users marked this note as inappropriate</span></li>
                            </ul>
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
                        </div>
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
                                    <a class="page-link" href="#" tabindex="-1 aria-label=" Previous">
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
    <!-- Custom jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>