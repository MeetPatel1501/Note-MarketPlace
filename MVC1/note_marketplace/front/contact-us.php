<?php
 
session_start();


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//mail function
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;
        $mail->Port = 587;  
        $mail->Username = "jarvis49016@gmail.com";
        $mail->Password = 'jarvis@2020';

        // Sender and recipient settings
        $mail->setFrom("jarvis49016@gmail.com", 'NotesMarketPlace');
        $mail->addAddress("jarvis49016@gmail.com");

        $mail->IsHTML(true);
        $mail->Subject = "Contact Us";


        $mail->Body = "Name: <b>$name</b><br><br>Email: <b>$email</b><br><br>
                      subject: <b>$subject</b> Comment: <b>$comments</b>";
        $mail->AltBody = '';

        $mail->send();
        $mail_sent = true;
        $alert = '<div class = "alert-sucess">
                <p style="font-size:20px;" >Message sent ! Thank you for contacting us.</span>
                </div>';
    } catch (Exception $e) {
        $alert = '<div class = "alert-sucess">
                <span>'.$e -> getMessage().'</span>
                </div>';
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



    
    <section id="contact-us">

        <div class="container container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div id="contact-us-statment" class="text-center">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    <section id="get-in-touch">
        <div class="content-box-lg">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-heading">
                            <h4>Get In Touch</h4>
                            <p>Let us know how to get back to you</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-left">
                            <form>
                                <div class="form-group fullname">
                                    <label for="fullname">Full Name*</label>
                                    <input required type="text" name="name" class="form-control" id="fullname" placeholder="Enter your full name">
                                </div>

                                <div class="form-group contact-email">
                                    <label for="contact-email">Email Address*</label>
                                    <input required type="email" name="email" class="form-control" id="contact-email" placeholder="Enter your email address">
                                </div>

                                <div class="form-group contact-subject">
                                    <label for="contact-subject">Subject*</label>
                                    <input required type="text" name="subject" class="form-control" id="contact-subject" placeholder="Enter your subject">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-right">
                            <form>
                                <div class="form-group comments">
                                    <label for="comments">Comments/Questions*</label>
                                    <textarea  required class="form-control" name="comments" id="comments" placeholder="Comments.."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="contact-button">Submit</button>
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