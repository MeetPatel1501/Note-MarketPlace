<?php 
    session_start();
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
    

    <section id="faq">

        <div class="container container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div id="faq-statment" class="text-center">
                        <h1>Frequently Asked Questions</h1>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    <section id="faq1">
        <div class="container">
            <div class="content-box-lg">
                <div class="general-heading">
                <h4>General-questions</h4></div>
                <div class="accordion wow zoomIn" id="general-question">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">What is Notes Marketplace?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                 <img  class="plus" src="image/faq/add.png" alt="plus">
                                 <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#general-question">
                            <div class="card-body">
                                <p>Notes Marketplace is an online marketplace for university students to buy and sell their course notes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Where did Notes Marketplace start?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#general-question">
                            <div class="card-body">
                                <p>What started out as four friends chucking around an idea in Ahmedabad ended up turning into an earliest version of Notes Marketplace. So, with 2021 batch of tatvasoft ??? we has developed this product.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="general-heading wow slideInLeft"><h4>Uploaders</h4></div>
                <div class="accordion wow zoomIn" id="uploaders">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Why should I upload now?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                 <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#uploaders">
                            <div class="card-body">
                                <p>To maximize sales. We can't sell your notes if they are rotting on your hard drive. Your notes are available for purchase the instant they are approved, which means that you could be missing potential sales as we speak. Despite exam and holiday breaks, our users purchase notes all year round, so the best time to upload notes is always today.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">What can't I sell?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                 <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#uploaders">
                            <div class="card-body">
                                <p>We won't approve materials that have been created by your university or another third party. We also do not accept assignments, essays, practical???s or take-home exams. We love notes though.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">How long does it take to upload?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#uploaders">
                            <div class="card-body">
                                <p>Uploading notes is quick and easy. It can take as little as 90 seconds per set of notes. Put it this way, in the time it took to read these FAQs, you could???ve uploaded several sets of notes.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="general-heading wow slideInLeft"><h4>Downloaders</h4></div>
                <div class="accordion wow zoomIn" id="downloaders">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">How do I buy notes?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#downloaders">
                            <div class="card-body">
                                <p>Search for the notes you are after using the 'SEARCH NOTES' tab at the at the top right of every page. You can then filter results by university, category, course information etc. To purchase, go to detail page of note and click on download button. If notes are free to download ??? it will download over the browser and if notes are paid, Once Seller will allow download you can have notes at my downloads grid for actual download.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Why should I buy notes?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#downloaders">
                            <div class="card-body">
                                <p>The notes on our site are incredibly useful as an educational tool when used correctly. They effectively demonstrate the techniques that top students employ in order to receive top marks. They also summaries the course in a concise format and show what that student believed were the most important elements of the course. Learn from the best.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Will downloading notes guarantee I improve my grades?</h6>
                            <a class="btn9 btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="image/faq/add.png" alt="plus">
                                <img  class="minus" src="image/faq/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#downloaders">
                            <div class="card-body">
                                <p>How long is a piece of string? However, 90% of students who purchased notes through our site said that doing so improved their grades.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

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