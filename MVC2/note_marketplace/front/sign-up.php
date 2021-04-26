<?php

    session_start();
   
    include 'config.php';

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail_sent = false;

    $msg = "";

    if(isset($_POST['submit']))
    {
        $fname = mysqli_real_escape_string($conn , $_POST['fname']);
        $lname = mysqli_real_escape_string($conn , $_POST['lname']);
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn , $_POST['confirm_password']);

        $pass = password_hash($password , PASSWORD_BCRYPT);
        $confirm_pass = password_hash($confirm_password , PASSWORD_BCRYPT);

        $email_query = " select * from users where email_id='$email'; ";
        $query = mysqli_query($conn , $email_query);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0)
        {
            $msg = "Email already exists.";
        }else
        {
            if($password === $confirm_password)
            {
               if(!preg_match('@[A-Z]@',$password))
               {
                    $msg = "Password must conatin atleast one upper-case";
               }
               elseif(!preg_match('@[a-z]@',$password))
               {
                    $msg = "Password must conatin atleast one lower-case";
               }
               elseif(!preg_match('@[0-9]@',$password))
               {
                    $msg = "Password must conatin atleast one digit";
               }elseif(!preg_match('/[^a-zA-Z\d]/',$password))
               {
                   $msg = "Password must contain atleast one special character";
               }
               elseif(strlen(trim($password))<6 || strlen(trim($password))>24)
               {
                    $msg = "Password must be atleast 6 character";
               }
               else
               {
                    $insertquery = "insert into users(role_id,first_name,last_name,email_id,password,is_email_verified,created_date,is_active) values(3,'$fname','$lname','$email','$pass',0,now(),1);";

                    $iquery = mysqli_query($conn , $insertquery);

                    if($iquery)
                    {


                        $msg = "Verify your email which is send to <strong>$email</strong>";

                        //userid getter
                        $id = mysqli_insert_id($conn);
                       

                        //mail function
                        require 'PHPMailer/Exception.php';
                        require 'PHPMailer/PHPMailer.php';
                        require 'PHPMailer/SMTP.php';
                                    
                        $mail = new PHPMailer(true);
                        $alert = '';

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
                            $mail->addAddress($email, $fname . $lname);
                            $mail->addReplyTo("jarvis49016@gmail.com", 'NotesMarketPlace');
                            $mail->IsHTML(true);
                            $mail->Subject = "Email verification";
                            $mail->AddEmbeddedImage('image/logo/logo.png', 'logo');

                            $mail->Body = "Dear $fname $lname<br><a href='http://localhost/note_marketplace/front/email_verification.php?ID=$id&FNAME=$fname'>click here to verify your email</a>";
                                
                            $mail->AltBody = '';

                            $mail->send();
                            $mail_sent = true;
                        } catch (Exception $e) {
                            $alert = '<div class = "alert-sucess">
                                    <span>'.$e -> getMessage().'</span>
                                    </div>';
                        }


                    }else
                    {
                        ?>
                            <script>
                                alert("SIGN UP FAILED");
                            </script>
                        <?php
                    }
               }
            }else
            {
                $msg = "Password are not Match";
            }
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
        <!-- Sign Up -->
        <section id="sign-up">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-4 col-sm-4 col-xm-4"></div>
                <div class="col-md-4 col-sm-4 col-xm-4">
                        
                        <img src="image/logo/top-logo.png" class="sign-up-logo-img img-responsive" alt="Logo">
                        
                        <form class="form-container sign-up" action="sign-up.php" method="POST">
                            <h1 style="margin-top: 15px;">Create an Account</h1>
                            <h5>Enter your details to signup</h5>
                            <p class="msg text-center" style="color:red; margin-top:-10px; font-weight:600 ">
                                <?php
                                    
                                    echo $msg;

                                ?>
                            </p>
                            <div class="form-group first-name">
                                <label for="fname">First Name*</label>
                                <input required type="text" class="form-control" name="fname" id="fname" placeholder="Enter your first name">
                            </div>
                            <div class="form-group last-name">
                                <label for="lname">Last Name*</label>
                                <input required type="text" class="form-control" name="lname" id="lname" placeholder="Enter your last name">
                            </div>
                            <div class="form-group email">
                                <label for="exampleInputEmail2">Email*</label>
                                <input required type="email" class="form-control" name="email" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group password">
                                <label for="exampleInputPassword5">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword5" placeholder="Password">
                                <span toggle="#exampleInputPassword5" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group password">
                                <label for="exampleInputPassword6" style="margin-top: -5px;" >Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword6" placeholder="Re-enter your password">
                                <span toggle="#exampleInputPassword6" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <button type="submit" href="#" name="submit" class="btn btn-default">SIGN UP</button>

                            <div class="bottom-text text-center">
                                Already have an account? <a href="login.php">Login</a>
                            </div>
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