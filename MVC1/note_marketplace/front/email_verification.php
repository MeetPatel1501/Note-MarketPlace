<?php 
    include 'config.php';

    $id = $_GET['ID'];
    $id = mysqli_real_escape_string($conn, $id);

    $fname = $_GET['FNAME'];
    $fname = mysqli_real_escape_string($conn, $fname);



    if(isset($_POST['submit1']))
    {

        $query = "UPDATE users SET is_email_verified=1 WHERE ID=$id";
        $uquery = mysqli_query($conn, $query);

        if($uquery)
        {
            header("location:http://localhost/note_marketplace/front/login.php");
        }
        else
        {
            ?>
                <script>
                    alert("email not verified");
                </script>
            <?php
        }
    }

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
    <link rel="stylesheet" href="/css/responsive.css">

</head>
<body>
    <!-- Email verification -->
    <section id="email-verification">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xm-4"></div>
               <div class="col-md-4 col-sm-4 col-xm-4">
                    <form class="form-container email-verification" method="POST">
                        <img src="image/logo/logo.png" class="logo-img1 img-responsive" alt="Logo">
                        <h1>Email Verification</h1>
                        <h4><strong>Dear <?php echo $fname; ?></strong></h4>
                        <h5>Thanks for Sign up!</h5>
                        <h5>Simply click below for email verification</h5>
                        
                        <button type="submit" name="submit1" class="btn btn-default">verify email address</button>
                    </form>
                </div> 
                <div class="col-md-4 col-sm-4 col-xm-4"></div>
            </div>
        </div>
    </section>
    

    <!-- Custom jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>