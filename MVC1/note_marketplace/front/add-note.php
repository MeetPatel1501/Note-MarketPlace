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
                                <li><a class="smooth-scroll" href="#">Search Notes</a></li>
                                <li><a class="smooth-scroll" href="#">Sell Your Notes</a></li>
                                <li><a class="smooth-scroll" href="#">Buyer Requests</a></li>
                                <li><a class="smooth-scroll" href="#">FAQ</a></li>
                                <li><a class="smooth-scroll" href="#">Contact Us</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a class="user-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/image/user-profile/user-img.png">
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Download</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Sold Notes</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Rejected Notes</a></li>
                                            <li class="presentation"><a class="purple" role="menuitem" tabindex="-1" href="#">LOGOUT</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="smooth-scroll" href="#"><button type="submit" href="#"class="btn2 btn-default">Logout</button></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav text-left">
                                <li><a class="smooth-scroll" href="#">Search Notes</a></li>
                                <li><a class="smooth-scroll" href="#">Sell Your Notes</a></li>
                                <li><a class="smooth-scroll" href="#">Buyer Requests</a></li>
                                <li><a class="smooth-scroll" href="#">FAQ</a></li>
                                <li><a class="smooth-scroll" href="#">Contact Us</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a class="user-photo" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/image/user-profile/user-img.png" style="margin-left: 20px;">
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Download</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Sold Notes</a></li>
                                            <li class="presentation"><a role="menuitem" tabindex="-1" href="#">My Rejected Notes</a></li>
                                            <li class="presentation"><a class="purple" role="menuitem" tabindex="-1" href="#">LOGOUT</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="smooth-scroll" href="#"><button type="submit" href="#"class="btn2 btn-default">Logout</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- User Profile -->
    <section id="user-profile">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div id="user-statment" class="text-center">
                        <h1>Add Notes</h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="basic-note-detail">

        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Basic Note Details</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group note-title">
                            <label for="note-title">Title*</label>
                            <input required type="text" class="form-control" id="note-title"
                                placeholder="Enter your notes title">
                        </div>
                        <div class="form-group display-picture">
                            <label for="display-picture">Display Picture</label>
                            <input type="file" class="form-control" id="display-picture" accept=".jpg" placeholder="Upload a picture">
                        </div>
                        <div class="form-group note-type">
                            <label for="note-type">Type</label>
                            <select required id="note-type">
                                <option value="type">Select your note type</option>
                                <option value="sc">science</option>
                                <option value="math">maths</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group note-category">
                            <label for="note-category">Category*</label>
                            <select required id="note-category">
                                <option value="categoty">Select your category</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group upload-note">
                            <label for="upload-note">Upload note*</label>
                            <input required type="file" class="form-control" id="upload-note"
                                placeholder="Upload your note">
                        </div>
                        <div class="form-group page-number">
                            <label for="page-number">Number of Pages</label>
                            <input type="text" class="form-control" id="page-number"placeholder="Enter Number of note pages">
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <form>
                        <div class="form-group note-description">
                            <label for="note-descriptionr">Description*</label>
                            <textarea class="form-control" id="note-description" placeholder="Enter your description"></textarea>
                        </div> 
                    </form>  
                </div>
            </div>
        </div>
    </section>

    <section id="institution-info">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Institution Information</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group inst-country">
                            <label for="inst-country">Country</label>
                            <select id="inst-country">
                                <option value="country">Select your country</option>
                                <option value="india">India</option>
                                <option value="uk">UK</option>
                                <option value="usa">USA</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group inst-name">
                            <label for="inst-name">Institution Name</label>
                            <input required type="text" class="form-control" id="inst-name" placeholder="Enter your institution name">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="clg-info">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Course Details</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group course-name">
                            <label for="course-name">Course Name</label>
                            <input type="text" class="form-control" id="course-name" placeholder="Enter your course name">
                        </div>

                        <div class="form-group course-professor">
                            <label for="course-professor">Professor/Lecturer</label>
                            <input type="text" class="form-control" id="course-professor" placeholder="Enter your professor name">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group course-code">
                            <label for="course-code">Course Code</label>
                            <input type="text" class="form-control" id="course-code" placeholder="Enter your course code">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="selling-info">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Selling Information</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group selling-radio">
                            <label>Sell For*</label>
                            <label><input required type="radio" id="free" name="sell" value="free"><span class="free-paid">Free</span> <input required type="radio" id="paid" name="sell" value="free"><span class="free-paid">Paid</span> </label>
                        </div>

                        <div class="form-group selling-price">
                            <label for="selling-price">Sell Price*</label>
                            <input required type="text" class="form-control" id="selling-price" placeholder="Enter your price">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group course-preview">
                            <label for="course-preview">Note Preview</label>
                            <input type="file" class="form-control" id="course-preview" placeholder="upload a file">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="bottom-button">
        <div class="content-box-lg">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="bottom-button">save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="bottom-button">publish</button>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container container-fluid">
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