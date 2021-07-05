<?php 
    
    include 'config.php';
    session_start();

    if(isset($_SESSION['email']))
    {
        ?>
            <script>
                alert("session work");
            </script>
        <?php
        //Seller id
        $email = $_SESSION['email'];
        $query = "SELECT id FROM users WHERE email_id = '$email' ";
        $result = mysqli_query($conn , $query);

        while($row = mysqli_fetch_array($result)){
            $seller_id = $row['id'];
        }

        if(isset($_POST['save1']))
        {
            
            $title = $_POST['title'];
            $category = $_POST['category'];
            $type = $_POST['type'];
            $pages = $_POST['pages'];
            $description = $_POST['description'];
            $country = $_POST['country'];
            $institute_name = $_POST['institute_name'];
            $course_name = $_POST['course_name'];
            $course_code = $_POST['course_code'];
            $professor_name = $_POST['professor_name'];
            $sell_type = $_POST['sell'];
            $sell_price = $_POST['sell_price'];
            $default_display_pic = "../members/default/note-default.png";
            
            
            $query_insert="INSERT INTO seller_notes(seller_id,status,actioned_by,title,category,display_picture,note_type,number_of_pages,
            description,university_name,country,course,course_Code,professor,is_paid,selling_price,created_date,
            created_by,modified_date,modified_by,is_active) VALUES 
            ($seller_id,6,$seller_id,'$title',$category,'$default_display_pic',$type,'$pages','$description',
            '$institute_name',$country,'$course_name','$course_code','$professor_name',$sell_type,$sell_price,
            NOW(),$seller_id,NOW(),$seller_id,1)";

            $insert_result=mysqli_query($conn, $query_insert);

            //note id
            $note_id = mysqli_insert_id($conn);

            //display picture
            $profile_pic = $_FILES['display_picture'];
            $filename = $profile_pic['name'];
            $filetmp = $profile_pic['tmp_name'];
            $extension = explode('.',$filename);
            $filecheck = strtolower(end($extension));
            $fileextstored = array('jpg','png','jpeg');

            if (in_array($filecheck, $fileextstored)) {
                if (!is_dir("../members/")) {
                    mkdir('../members/');
                }
                if (!is_dir("../members/" . $seller_id)) {
                    mkdir("../members/" . $seller_id);
                }
                if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                    mkdir('../members/' . $seller_id . '/' . $note_id);
                }
                $destinationfile = '../members/' . $seller_id . '/' . $note_id . '/' . "DP_" . time() . '.' . $filecheck;
                move_uploaded_file($filetmp, $destinationfile);
                $query_pic = "UPDATE seller_notes SET display_picture='$destinationfile' WHERE id=$note_id";
                $result_pic = mysqli_query($conn, $query_pic);
            } else {
                //$valid_format_1 = false;
            }

            //Note Preview
            $note_preview = $_FILES['note_preview'];
            $filename2 = $note_preview['name'];
            $filetmp2 = $note_preview['tmp_name'];
            $extention2 = explode('.', $filename2);
            $filecheck2 = strtolower(end($extention2));
            $fileextstored2 = array('jpg', 'png', 'jpeg');

            if (in_array($filecheck2, $fileextstored2)) {
                if (!is_dir("../members/")) {
                    mkdir('../members/');
                }
                if (!is_dir("../members/" . $seller_id)) {
                    mkdir("../members/" . $seller_id);
                }
                if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                    mkdir('../members/' . $seller_id . '/' . $note_id);
                }
                $destinationfile2 = '../members/' . $seller_id . '/' . $note_id . '/' . "Preview_" . time() . '.' . $filecheck2;
                move_uploaded_file($filetmp2, $destinationfile2);
                $query_preview = "UPDATE seller_notes SET notes_preview='$destinationfile2' WHERE id=$note_id";
                $result_preview = mysqli_query($conn, $query_preview);
            } else {
                //$valid_format_3 = false;
            }

            //multiple files
            $upload_note = count($_FILES['upload_note']['name']);

            // Looping all files
            for ($i = 0; $i < $upload_note; $i++) 
            {


                $filename3 = $_FILES['upload_note']['name'][$i];
                $extention3 = explode('.', $filename3);
                $filecheck3 = strtolower(end($extention3));
                $fileextstored3 = array('pdf');

                if (in_array($filecheck3, $fileextstored3)) {
                    $query_multiple_path = "INSERT INTO seller_notes_attachements (note_id,created_date,created_by,is_active) 
                                        VALUES ($note_id,NOW(),$seller_id,1)";
                    $result_multiple_path = mysqli_query($conn, $query_multiple_path);

                    $attach_id = mysqli_insert_id($conn);

                    // Upload file
                    if (!is_dir("../members/")) {
                        mkdir('../members/');
                    }
                    if (!is_dir("../members/" . $seller_id)) {
                        mkdir("../members/" . $seller_id);
                    }
                    if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                        mkdir('../members/' . $seller_id . '/' . $note_id);
                    }
                    if (!is_dir("../members/" . $seller_id . "/" . $note_id . "/" . "Attachements")) {
                        mkdir('../members/' . $seller_id . '/' . $note_id . '/' . 'Attachements');
                    }

                    $multiple_file_name = '../members/' . $seller_id . '/' . $note_id . '/' . 'Attachements/' . $attach_id . '_' . time() . '.' . $filecheck3;
                    move_uploaded_file($_FILES['upload_note']['tmp_name'][$i], $multiple_file_name);

                    $attached_name = $attach_id . "_" . time() . $filecheck3;
                    $query_multiple_final = "UPDATE seller_notes_attachements SET file_name='$attached_name',file_path='$multiple_file_name' WHERE id =$attach_id";
                    $result_multiple_final = mysqli_query($conn, $query_multiple_final);
                } else {
                    $valid_format_2 = false;
                }
            }
            header('Location:dashboard.php');
        }else if (isset($_GET['id'])) {
            $publish_note_id = $_GET['id'];
            $fetch_detail = mysqli_query($conn, "SELECT * FROM seller_notes WHERE id=$publish_note_id");
    
            while ($row = mysqli_fetch_assoc($fetch_detail)) {
    
                $categories_id = "";
                $countries_id = "";
                $sell_type_new = "";
                $title = $row['title'];
                $categories_id = $row['category'];
                $type = $row['notetype'];
                $note_pages = $row['number_of_pages'];
                $description = $row['description'];
                $countries_id = $row['country'];
                $institute_name = $row['university_name'];
                $course_name = $row['course'];
                $course_code = $row['course_code'];
                $professor_name = $row['proffesor'];
                $sell_type_new = $row['is_paid'];
                $sell_price = $row['selling_price'];
            }
    
            $fetch_category = mysqli_query($conn, "SELECT name FROM note_categories WHERE id=$categories_id");
            while ($row = mysqli_fetch_assoc($fetch_category)) {
                $category_name = $row['name'];
            }
    
            $fetch_type = mysqli_query($conn, "SELECT name FROM note_types WHERE id =$type");
            while ($row = mysqli_fetch_assoc($fetch_type)) {
                $type_name = $row['name'];
            }
    
            $fetch_country = mysqli_query($conn, "SELECT name FROM countries WHERE id=$countries_id");
            while ($row = mysqli_fetch_assoc($fetch_country)) {
                $country_name = $row['name'];
            }
        }
    
        if (isset($_POST['save2'])) {
    
            $dashboard_noteid = $_POST['id_getter'];
            $title = $_POST['title'];
            $category = $_POST['category'];
            $type = $_POST['type'];
            $pages = $_POST['pages'];
            $description = $_POST['description'];
            $country = $_POST['country'];
            $institute_name = $_POST['institute_name'];
            $course_name = $_POST['course_name'];
            $course_code = $_POST['course_code'];
            $professor_name = $_POST['professor_name'];
            $sell_type = $_POST['sell'];
            $sell_price = $_POST['sell_price'];
    
            $query_insert_save = "UPDATE seller_notes SET title='$title',category=$category,
                                      note_type=$type,number_of_pages=$note_pages,description='$description',
                                      university_name='$institute_name',country=$country,course='$course_name',
                                      course_code='$course_code',proffesor='$professor_name',is_paid=$sell_type,
                                      selling_price='$sell_price',modified_date=NOW(),modified_by=$seller_id 
                                      WHERE id=$dashboard_noteid";
    
            $result_insert_save = mysqli_query($conn, $query_insert_save);

             //display picture
             $profile_pic = $_FILES['display_picture'];
             $filename = $profile_pic['name'];
             $filetmp = $profile_pic['tmp_name'];
             $extension = explode('.',$filename);
             $filecheck = strtolower(end($extension));
             $fileextstored = array('jpg','png','jpeg');
 
             if (in_array($filecheck, $fileextstored)) {
                 if (!is_dir("../members/")) {
                     mkdir('../members/');
                 }
                 if (!is_dir("../members/" . $seller_id)) {
                     mkdir("../members/" . $seller_id);
                 }
                 if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                     mkdir('../members/' . $seller_id . '/' . $note_id);
                 }
                 $destinationfile = '../members/' . $seller_id . '/' . $note_id . '/' . "DP_" . time() . '.' . $filecheck;
                 move_uploaded_file($filetmp, $destinationfile);
                 $query_pic = "UPDATE seller_notes SET display_picture='$destinationfile' WHERE id=$note_id";
                 $result_pic = mysqli_query($conn, $query_pic);
             } else {
                $valid_format_1 = false;
             }
 
             //Note Preview
             $note_preview = $_FILES['note_preview'];
             $filename2 = $note_preview['name'];
             $filetmp2 = $note_preview['tmp_name'];
             $extention2 = explode('.', $filename2);
             $filecheck2 = strtolower(end($extention2));
             $fileextstored2 = array('jpg', 'png', 'jpeg');
 
             if (in_array($filecheck2, $fileextstored2)) {
                 if (!is_dir("../members/")) {
                     mkdir('../members/');
                 }
                 if (!is_dir("../members/" . $seller_id)) {
                     mkdir("../members/" . $seller_id);
                 }
                 if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                     mkdir('../members/' . $seller_id . '/' . $note_id);
                 }
                 $destinationfile2 = '../members/' . $seller_id . '/' . $note_id . '/' . "Preview_" . time() . '.' . $filecheck2;
                 move_uploaded_file($filetmp2, $destinationfile2);
                 $query_preview = "UPDATE seller_notes SET notes_preview='$destinationfile2' WHERE id=$note_id";
                 $result_preview = mysqli_query($conn, $query_preview);
             } else {
                 $valid_format_3 = false;
             }
 
             //multiple files
             $upload_note = count($_FILES['upload_note']['name']);
 
             // Looping all files
             for ($i = 0; $i < $upload_note; $i++) 
             {
 
 
                 $filename3 = $_FILES['upload_note']['name'][$i];
                 $extention3 = explode('.', $filename3);
                 $filecheck3 = strtolower(end($extention3));
                 $fileextstored3 = array('pdf');
 
                 if (in_array($filecheck3, $fileextstored3)) {
                     $query_multiple_path = "INSERT INTO seller_notes_attachements (note_id,created_date,created_by,is_active) 
                                         VALUES ($note_id,NOW(),$seller_id,1)";
                     $result_multiple_path = mysqli_query($conn, $query_multiple_path);
 
                     $attach_id = mysqli_insert_id($conn);
 
                     // Upload file
                     if (!is_dir("../members/")) {
                         mkdir('../members/');
                     }
                     if (!is_dir("../members/" . $seller_id)) {
                         mkdir("../members/" . $seller_id);
                     }
                     if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                         mkdir('../members/' . $seller_id . '/' . $note_id);
                     }
                     if (!is_dir("../members/" . $seller_id . "/" . $note_id . "/" . "Attachements")) {
                         mkdir('../members/' . $seller_id . '/' . $note_id . '/' . 'Attachements');
                     }
 
                     $multiple_file_name = '../members/' . $seller_id . '/' . $note_id . '/' . 'Attachements/' . $attach_id . '_' . time() . '.' . $filecheck3;
                     move_uploaded_file($_FILES['upload_note']['tmp_name'][$i], $multiple_file_name);
 
                     $attached_name = $attach_id . "_" . time() . $filecheck3;
                     $query_multiple_final = "UPDATE seller_notes_attachements SET file_name='$attached_name',file_path='$multiple_file_name' WHERE id =$attach_id";
                     $result_multiple_final = mysqli_query($conn, $query_multiple_final);
                 } else {
                    $valid_format_2 = false;
                 }
            }
        }
             header('Location:dashboard.php');
         
    }
    if (isset($_POST['publish'])) {

        $dashboard_noteid = $_POST['id_getter'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $type = $_POST['type'];
        $pages = $_POST['pages'];
        $description = $_POST['description'];
        $country = $_POST['country'];
        $institute_name = $_POST['institute_name'];
        $course_name = $_POST['course_name'];
        $course_code = $_POST['course_code'];
        $professor_name = $_POST['professor_name'];
        $sell_type = $_POST['sell'];
        $sell_price = $_POST['sell_price'];

        $query_insert_publish = "UPDATE seller_notes SET status=6,published_date=NOW(),title='$title',category=$category,
                                  note_type=$type,number_of_pages=$note_pages,description='$description',
                                  university_name='$institute_name',country=$country,course='$course_name',
                                  course_code='$course_code',proffesor='$professor_name',is_paid=$sell_type,
                                  selling_price='$sell_price',modified_date=NOW(),modified_by=$seller_id 
                                  WHERE id=$dashboard_noteid";

        $result_insert_pubhlish = mysqli_query($conn, $query_insert_publish);
        //display picture
        $profile_pic = $_FILES['display_picture'];
        $filename = $profile_pic['name'];
        $filetmp = $profile_pic['tmp_name'];
        $extension = explode('.',$filename);
        $filecheck = strtolower(end($extension));
        $fileextstored = array('jpg','png','jpeg');

        if (in_array($filecheck, $fileextstored)) {
            if (!is_dir("../members/")) {
                mkdir('../members/');
            }
            if (!is_dir("../members/" . $seller_id)) {
                mkdir("../members/" . $seller_id);
            }
            if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                mkdir('../members/' . $seller_id . '/' . $note_id);
            }
            $destinationfile = '../members/' . $seller_id . '/' . $note_id . '/' . "DP_" . time() . '.' . $filecheck;
            move_uploaded_file($filetmp, $destinationfile);
            $query_pic = "UPDATE seller_notes SET display_picture='$destinationfile' WHERE id=$note_id";
            $result_pic = mysqli_query($conn, $query_pic);
        } else {
            $valid_format_1 = false;
        }

        //Note Preview
        $note_preview = $_FILES['note_preview'];
        $filename2 = $note_preview['name'];
        $filetmp2 = $note_preview['tmp_name'];
        $extention2 = explode('.', $filename2);
        $filecheck2 = strtolower(end($extention2));
        $fileextstored2 = array('jpg', 'png', 'jpeg');

        if (in_array($filecheck2, $fileextstored2)) {
            if (!is_dir("../members/")) {
                mkdir('../members/');
            }
            if (!is_dir("../members/" . $seller_id)) {
                mkdir("../members/" . $seller_id);
            }
            if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                mkdir('../members/' . $seller_id . '/' . $note_id);
            }
            $destinationfile2 = '../members/' . $seller_id . '/' . $note_id . '/' . "Preview_" . time() . '.' . $filecheck2;
            move_uploaded_file($filetmp2, $destinationfile2);
            $query_preview = "UPDATE seller_notes SET notes_preview='$destinationfile2' WHERE id=$note_id";
            $result_preview = mysqli_query($conn, $query_preview);
        } else {
            //$valid_format_3 = false;
        }

        //multiple files
        $upload_note = count($_FILES['upload_note']['name']);

        // Looping all files
        for ($i = 0; $i < $upload_note; $i++) 
        {


            $filename3 = $_FILES['upload_note']['name'][$i];
            $extention3 = explode('.', $filename3);
            $filecheck3 = strtolower(end($extention3));
            $fileextstored3 = array('pdf');

            if (in_array($filecheck3, $fileextstored3)) {
                $query_multiple_path = "INSERT INTO seller_notes_attachements (note_id,created_date,created_by,is_active) 
                                    VALUES ($note_id,NOW(),$seller_id,1)";
                $result_multiple_path = mysqli_query($conn, $query_multiple_path);

                $attach_id = mysqli_insert_id($conn);

                // Upload file
                if (!is_dir("../members/")) {
                    mkdir('../members/');
                }
                if (!is_dir("../members/" . $seller_id)) {
                    mkdir("../members/" . $seller_id);
                }
                if (!is_dir("../members/" . $seller_id . "/" . $note_id)) {
                    mkdir('../members/' . $seller_id . '/' . $note_id);
                }
                if (!is_dir("../members/" . $seller_id . "/" . $note_id . "/" . "Attachements")) {
                    mkdir('../members/' . $seller_id . '/' . $note_id . '/' . 'Attachements');
                }

                $multiple_file_name = '../members/' . $seller_id . '/' . $note_id . '/' . 'Attachements/' . $attach_id . '_' . time() . '.' . $filecheck3;
                move_uploaded_file($_FILES['upload_note']['tmp_name'][$i], $multiple_file_name);

                $attached_name = $attach_id . "_" . time() . $filecheck3;
                $query_multiple_final = "UPDATE seller_notes_attachements SET file_name='$attached_name',file_path='$multiple_file_name' WHERE id =$attach_id";
                $result_multiple_final = mysqli_query($conn, $query_multiple_final);
            } else {
                $valid_format_2 = false;
            }
        }
        header('Location:dashboard.php');
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

    </section>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST" enctype="multipart/form-data">
        <section id="basic-note-detail">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Basic Note Details</h2>
                    </div>
                    <div class="col-md-6">
                        
                            <div class="form-group note-title">
                                <label for="note-title">Title*</label>
                                <input required type="text" name="title" class="form-control" id="note-title"
                                    placeholder="Enter your notes title">
                            </div>
                            <div class="form-group display-picture">
                                <label for="display-picture">Display Picture</label>
                                <input type="file" name="display_picture" class="form-control" id="display-picture" placeholder="Upload a picture">
                            </div>
                            <div class="form-group note-type">
                                <label for="note-type">Type</label>
                                <select required name="type" id="note-type">
                                    <?php 
                                        echo "<option selected disabled>Select your Note type</option>";
                                        $query_type = "SELECT name,id FROM note_type";
                                        $result_type = mysqli_query($conn, $query_type);

                                        while ($raw = mysqli_fetch_assoc($result_type)) {
                                            $types = $raw['name'];
                                            $type_id = $raw['id'];
                                            echo " <option value='$type_id'>$types</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                            <div class="form-group note-category">
                                <label for="note-category">Category*</label>
                                <select name="category" required id="note-category">
                                    <?php 
                                        $query_category = "SELECT name,id FROM note_categories";
                                        $result_category = mysqli_query($conn, $query_category);
                                        echo "<option selected disabled>Select your Category</option>";

                                        while ($raw = mysqli_fetch_assoc($result_category)) {
                                            $categories = $raw['name'];
                                            $category_id = $raw['id'];
                                            echo "<option value='$category_id'>$categories</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group upload-note">
                                <label for="upload-note">Upload note*</label>
                                <input required type="file" name="upload_note[]" class="form-control" id="upload-note"
                                    placeholder="Upload your note" multiple>
                            </div>
                            <div class="form-group page-number">
                                <label for="page-number">Number of Pages</label>
                                <input type="text" name="pages" class="form-control" id="page-number"placeholder="Enter Number of note pages">
                            </div>
                        
                    </div>
                    <div class="col-md-12">
                        
                            <div class="form-group note-description">
                                <label for="note-descriptionr">Description*</label>
                                <textarea class="form-control" name="description" id="note-description" placeholder="Enter your description"></textarea>
                            </div> 
                          
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
                        
                            <div class="form-group inst-country">
                                <label for="inst-country">Country</label>
                                <select name="country" id="inst-country">
                                    <?php 
                                        echo "<option selected disabled>Select your Note type</option>";
                                        $query_type = "SELECT name,id FROM countries";
                                        $result_type = mysqli_query($conn, $query_type);

                                        while ($raw = mysqli_fetch_assoc($result_type)) {
                                            $country = $raw['name'];
                                            $country_id = $raw['id'];
                                            echo " <option value='$country_id'>$country</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                       
                            <div class="form-group inst-name">
                                <label for="inst-name">Institution Name</label>
                                <input required type="text" name="institute_name" class="form-control" id="inst-name" placeholder="Enter your institution name">
                            </div>
                        
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
                        
                            <div class="form-group course-name">
                                <label for="course-name">Course Name</label>
                                <input type="text" name="course_name" class="form-control" id="course-name" placeholder="Enter your course name">
                            </div>

                            <div class="form-group course-professor">
                                <label for="course-professor">Professor/Lecturer</label>
                                <input type="text" name="professor_name" class="form-control" id="course-professor" placeholder="Enter your professor name">
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                            <div class="form-group course-code">
                                <label for="course-code">Course Code</label>
                                <input type="text" name="course_code" class="form-control" id="course-code" placeholder="Enter your course code">
                            </div>
                        
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
                        
                            <div class="form-group selling-radio">
                                <label>Sell For*</label>
                                <label><input required type="radio" id="free" name="sell" value="5"><span class="free-paid">Free</span> <input required type="radio" id="paid" name="sell" value="4"><span class="free-paid">Paid</span> </label>
                            </div>

                            <div class="form-group selling-price">
                                <label for="selling-price">Sell Price*</label>
                                <input required type="text" name="sell_price" class="form-control" id="selling-price" placeholder="Enter your price">
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                            <div class="form-group course-preview">
                                <label for="course-preview">Note Preview</label>
                                <input type="file" name="note_preview" class="form-control" id="course-preview" placeholder="upload a file">
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section id="bottom-button">
            <div class="content-box-lg">
                <div class="container container-fluid">
                    
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" name="save1" class="bottom-button">save</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" name="publish" class="bottom-button">publish</button>
                            </div>
                            <div class="col-md-8"></div>
                        </div>
                </div>
            </div>
        </section>
    </form>
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