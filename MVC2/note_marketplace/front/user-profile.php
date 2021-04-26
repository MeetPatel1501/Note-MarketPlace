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
    <!-- User Profile -->
    <section id="user-profile">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div id="user-statment" class="text-center">
                        <h1>User Profile</h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="profile-details">

        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Basic Profile Details</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group first-name mmp">
                            <label for="fname">First Name*</label>
                            <input required type="text" class="form-control" id="fname"
                                placeholder="Enter your first name">
                        </div>
                        <div class="form-group email mmp">
                            <label for="exampleInputEmail2">Email*</label>
                            <input required type="email" class="form-control" id="exampleInputEmail2"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group gender mmp">
                            <label for="gender">Gender</label>
                            <select id="gender">
                                <option value="gender">Select your gender</option>
                                <option value="male">Male</option>
                                <option value="fe-male">Fe-Male</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group profile-picture mmp">
                            <label for="profile-picture">Profile Picture</label>
                            <input type="file" class="form-control" accept=".jpg" id="profile-picture">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group last-name mmp">
                            <label for="lname">Last Name*</label>
                            <input required type="text" class="form-control" id="lname"
                                placeholder="Enter your last name">
                        </div>
                        <div class="form-group birthday mmp">
                            <label for="birthday">Date Of Birth</label>
                            <input type="date" class="form-control" id="birthday"
                                placeholder="Enter your date of birth">
                        </div>
                        <div class="form-group phone">
                            <label for="phone">Phone Number</label>
                            <div class="ph">
                                <select id="phone">
                                    <option value="india">+91</option>
                                    <option value="iran">+98</option>
                                    <option value="iraq">+964</option>
                                    <option value="other">Other</option>
                                </select>
                                <input required type="tel" class="form-control" id="ph"
                                    placeholder="Enter your phone number">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="address-details">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Address Details</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group address1 mmp">
                            <label for="address1">Address Line1*</label>
                            <input required type="text" class="form-control" id="address1"
                                placeholder="Enter your address">
                        </div>
                        <div class="form-group last-name city mmp">
                            <label for="city">City*</label>
                            <input required type="text" class="form-control" id="city" placeholder="Enter your city">
                        </div>
                        <div class="form-group zip-code mmp">
                            <label for="zip-code">Zip Code*</label>
                            <input required type="text" class="form-control" id="zip-code"
                                placeholder="Enter your zip-code">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group address2 mmp">
                            <label for="address2">Address Line 2</label>
                            <input type="text" class="form-control" id="address2" placeholder="Enter your address">
                        </div>
                        <div class="form-group state mmp">
                            <label for="state">State*</label>
                            <input required type="text" class="form-control" id="state" placeholder="Enter your state">
                        </div>
                        <div class="form-group country mmp">
                            <label for="country">Country*</label>
                            <select required id="country">
                                <option value="country">Select your country</option>
                                <option value="india">India</option>
                                <option value="uk">UK</option>
                                <option value="usa">USA</option>
                            </select>
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
                    <h2>University and College Information</h2>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group university mmp">
                            <label for="university">University</label>
                            <input type="text" class="form-control" id="university" placeholder="Enter your university">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group college mmp">
                            <label for="college">College</label>
                            <input type="text" class="form-control" id="college" placeholder="Enter your college">
                        </div>
                    </form>
                </div>
                <button type="submit" href="#" class="btn1 btn-default">Submit</button>
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