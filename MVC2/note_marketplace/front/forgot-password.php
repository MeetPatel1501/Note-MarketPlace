<?php 
    session_start();
?>

<?php 

    include 'config.php';

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail_sent = false;

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+<>?{}.,;";
        $str = str_shuffle($str);
        $password = substr($str,0,8);

        $email_search = "select * from users where email_id ='$email' ";
        $query = mysqli_query($conn,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count)
        {
            $email_pass = mysqli_fetch_assoc($query);
            $fname = $email_pass['first_name'];
            $lname = $email_pass['last_name'];

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
                $mail->Subject = "New Temporary Password has been created for you";
                $mail->AddEmbeddedImage('image/logo/logo.png', 'logo');

                $mail->Body = "Dear $fname $lname<br>We have generated a new password for you<br> 
                <h4>Password: $password;</h4><br>
                Regards<br>
                Note Marketplace.";
                    
                $mail->AltBody = '';

                $mail->send();
                $mail_sent = true;
            } catch (Exception $e) 
            {
                $alert = '<div class = "alert-sucess">
                        <span>'.$e -> getMessage().'</span>
                        </div>';
            }

               // When Mail send to user
               if($mail_sent)
               {
                   //encryption of password
                   $pass = password_hash($password,PASSWORD_BCRYPT);

                   //update password in database
                   $update_query = "UPDATE users SET password='$pass' WHERE email_id = '$email' ";
                   $uquery = mysqli_query($conn,$update_query);

                   if($uquery)
                   {
                       ?>
                            <script>
                                alert("Your password has been changed successfully and newly generated password is sent on your registered email address.");
                                window.location.href = "http://localhost/note_marketplace/front/login.php";
                            </script>
                             
                        <?php

                        //header("location:http://localhost/note_marketplace/front/login.php");
                    }else{
                        ?>
                            <script>
                                alert("Password not changed.");
                            </script>
                        <?php   
                    }
                }else{
                    ?>
                        <script>
                            alert("Mail not send.");
                        </script>
                    <?php      
                }
        }else{
            ?>
                <script>
                    alert("Email not registered..Plz enter registered email.");
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
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
    <!-- forgot password  -->
    <section id="forgot-password">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xm-4"></div>
               <div class="col-md-4 col-sm-4 col-xm-4">
                    
                    <img src="image/logo/top-logo.png" class="fp-logo-img img-responsive" alt="Logo">
                    
                    <form class="form-container fp" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
                        <h1>Forgot Password?</h1>
                        <h5>Enter your email to reset your password</h5>
                        <div class="form-group email">
                            <label for="exampleInputEmail3">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <button type="submit" name="submit" href="#" class="btn btn-default">submit</button>
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