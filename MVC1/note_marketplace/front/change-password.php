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
    <!-- Change Password -->
    <section id="change-password">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xm-4"></div>
               <div class="col-md-4 col-sm-4 col-xm-4">
                    
                    <img src="image/logo/top-logo.png" class="logo-img img-responsive" alt="Logo">
                    
                    <form class="form-container cp">
                        <h1>Change Password</h1>
                        <h5>Enter your new password to change password</h5>
                        
                        <div class="form-group password">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Enter your Old Password">
                            <span toggle="#exampleInputPassword2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group password">
                            <label for="exampleInputPassword3">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Enter your New Password">
                            <span toggle="#exampleInputPassword3" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group password">
                            <label for="exampleInputPassword4">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Enter your confirm Password">
                            <span toggle="#exampleInputPassword4" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <button type="submit" href="#" class="btn btn-default">submit</button>
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