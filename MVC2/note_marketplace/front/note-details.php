<?php 

    session_start();
    include 'config.php';

?>




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
        
        <!-- Notes-details -->
        <section id="note-details">
            <div class="content-box-lg">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="horizontal-heading text-left">
                            <h3>Notes Details</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="image/notes-details/computer-science.png" alt="book-logo" class="img-responsive img-book1">
                                </div>
                                <div class="col-md-6">
                                    <div class="title text-left">
                                        <h3>Computer Science</h3>
                                        <p>Science</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea quos eos saepe necessitatibus dolorum error tenetur facere deserunt quisquam similique laboriosam.</p>
                                        <button type="button" class="btn4" data-toggle="modal" data-target="#popup">Download/$15</button>
                                
                                        <!-- Pop-up -->
                                        <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popup-Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <span id="check-sym">&#10003;</span>
                                                        <h5>Thank you for purchasing!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Dear Smith</h6>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error totam mollitia voluptate sequi, nesciunt iste quibusdam, expedita earum illum aliquam eius. Aliquid, doloribus vitae commodi architecto similique repellendus ipsam.</p>
                                                        <p>in case, any imergency<br>contact us on 95377345959</p>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error totam mollitia voluptate sequi, nesciunt iste quibusdam.</p>
                                                        <p>Have a good day.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5 col-sm-6 nc">
                            <div class="note-content">
                                <div class="detail-left">
                                    <p>institution:</p>
                                    <p>Country:</p>
                                    <p>Course Name:</p>
                                    <p>Course Code:</p>
                                    <p>Professor:</p>
                                    <p>Number of Pages:</p>
                                    <p>Approved Date:</p>
                                    <p>Rating:</p>
                                    <p>5 Users marked this note as inappropriate</p>
                                </div>
                                
                                <div class="detail-right text-right">
                                    <p>University of California</p>
                                    <p>United State</p>
                                    <p>Computer Engineering</p>
                                    <p>248705</p>
                                    <p>Mr.Richard Brown</p>
                                    <p>277</p>
                                    <p>November 25 2020</p>
                                    <div class="row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6"><p>100 Review</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="line"></span>
                </div>
            </div>
        </section>

        <section id="notes-preview">
            <div class="content-box-lg">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="horizontal-heading text-left">
                                <h3>Notes Preview</h3>
                            </div>
                            <div class="notes-preview">
                                <div id="Iframe-Cicis-Menu-To-Go" class="set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
                                    <div class="responsive-wrapper 
                                    responsive-wrapper-padding-bottom-90pct" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                                    <iframe src="http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf">
                                            <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                                An &#105;frame should be displayed here but your browser version does not support &#105;frames.</em> Please update your browser to its most recent version and try again, or access the file <a href="http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf">with this link.</a></p>
                                    </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="horizontal-heading text-left">
                                <h3>Customer Preview</h3>
                            </div>
                            <div class="customer-preview">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="reviewer">
                                            <img src="image/notes-details/reviewer-1.png" alt="reviewer1" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="revr-detail">
                                            <h4>Richard Brown</h4>
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
                                            <br><br><p>Lorem Ipsum is simply dummy text.it has been the industry sosr standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="line1"></span>
                                <!-- customer 2-->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="reviewer">
                                            <img src="image/notes-details/reviewer-2.png" alt="reviewer1" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="revr-detail">
                                            <h4>Alice Ortiaz</h4>
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
                                            <br><br><p>Lorem Ipsum is simply dummy text.it has been the industry sosr standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="line1"></span>

                                <!-- cistomer 3-->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="reviewer">
                                            <img src="image/notes-details/reviewer-3.png" alt="reviewer1" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="revr-detail">
                                            <h4>Sara Passmore</h4>
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
                                            <br><br><p>Lorem Ipsum is simply dummy text.it has been the industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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