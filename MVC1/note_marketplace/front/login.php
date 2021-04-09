<?php 

    session_start();
?>

<?php

    include 'config.php';
    $msg = "";
    $msg1 = "";

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $email_search = "select * from users where email_id='$email' ";
        $query = mysqli_query($conn,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count)
        {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $pass_decode = password_verify($password,$db_pass);
        
            if($pass_decode)
            {
                if(isset($_POST['remember'])){
                    setcookie('email',$email, time() + 60 * 60 *24 * 7);
                    setcookie('password',$password, time() + 60 * 60 *24 * 7);
                }            
                ?>
                    <script>
                        alert("Login Successful")
                    </script>
                <?php
                header("location:http://localhost/note_marketplace/front/login.php");
            }else{

                $msg1 = "Password is incorrect";
            }
        }
        else
        {
            $msg = "Invalid Email";
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
    <!-- Login -->
    <section id="login">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xm-4"></div>
               <div class="col-md-4 col-sm-4 col-xm-4 login">
                    
                    <img src="image/logo/top-logo.png" class="logo-img img-responsive" alt="Logo">
                    
                    <form class="form-container"  method="POST">
                        <h1>Login</h1>
                        <h5>Enter your email address and password to login</h5>
                        <div class="form-group email">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <p class="msg" style="color: red; font-weight:500; " >
                                <?php 
                                    echo $msg;
                                ?>
                            </p>
                        </div>
                        <div class="form-group password">
                            <label for="exampleInputPassword1">Password <a href="forgot-password.php">Forgot Password?</a></label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            <span toggle="#exampleInputPassword1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <p class="msg" style="color: red; font-weight:500; " >
                                <?php 
                                    echo $msg1;
                                ?>
                            </p>
                            
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" name="submit" href="#" class="btn btn-default">Login</button>

                        <div class="bottom-text text-center">
                            Don't have account? <a href="sign-up.php">Sign up</a>
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