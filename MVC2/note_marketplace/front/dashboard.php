<?php 
    session_start();

    include "config.php";
    $limit = 5;

    if (isset($_GET["page"])) {
        $page  = $_GET["page"];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $limit;
    if (isset($_POST['search_1'])) {

        $search_result = $_POST['search'];

        $query = "SELECT seller_notes.id,seller_notes.modified_date,seller_notes.title,
                note_categories.name,reference_data.value FROM seller_notes LEFT JOIN 
                note_categories ON seller_notes.category=note_categories.id LEFT JOIN reference_data 
                ON seller_notes.status=reference_data.id WHERE seller_notes.title LIKE '%$search_result%' 
                AND seller_notes.is_active=1 AND reference_data.id IN (3,4,5) 
                ORDER BY seller_notes.modified_date DESC LIMIT $start_from, $limit";

        $result = mysqli_query($conn, $query);

        $result_num = mysqli_query($conn, "SELECT COUNT(id) FROM seller_notes WHERE title LIKE '%$search_result%' AND seller_notes.is_active=1 AND status IN (3,4,5)");
        $row = mysqli_fetch_row($result_num);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
    } else {

        $query = "SELECT seller_notes.id,seller_notes.modified_date,seller_notes.title,note_categories.name,
                reference_data.value FROM seller_notes LEFT JOIN note_categories ON 
                seller_notes.category=note_categories.id LEFT JOIN reference_data 
                ON seller_notes.status=reference_data.id WHERE reference_data.id IN (3,4,5) 
                AND seller_notes.is_active=1 ORDER BY seller_notes.modified_date DESC LIMIT $start_from, $limit";

        $result = mysqli_query($conn, $query);

        $result_num = mysqli_query($conn, "SELECT COUNT(id) FROM seller_notes WHERE status IN (3,4,5) AND seller_notes.is_active=1");
        $row = mysqli_fetch_row($result_num);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
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
   
    <section id="dashboard">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard-heading">
                            <div class="item1"><h4>Dashboard</h4></div>
                            <div class="item1"><button type="button">Add Notes</button></div>
                        </div>
                    </div>
                     
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-box">
                            <div class="col-md-3">
                                <div class="box1">
                                    <img src="image/dashboard/my-earning.png" alt="earning" class="img-responsive">
                                    <h5>My Earning</h5>
                                </div>
                            </div>
                            <div class="col-md-4 b">
                                <div class="box2">
                                    <h4>100</h4>
                                    <p>Number of Notes Sold</p>
                                </div>
                            </div>
                            <div class="col-md-5 b">
                                <div class="box3">
                                    <h4>$10,00,000</h4>
                                    <p>Money Earned</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-box text-center">
                            <div class="col-md-4">
                                <div class="box4">
                                    <h4>38</h4>
                                    <p>My Downloads</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box5">
                                    <h4>12</h4>
                                    <p>My Rejected Notes</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box6">
                                    <h4>102</h4>
                                    <p>Buyer Requests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="progress-note">
        <div class="content-box-lg">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="publish-heading">
                            <div class="item"><h5>In Progress Notes</h5></div>
                            <div class="item">
                                <form class="progress-search" action="/action_page.php">
                                    <img src="image/dashboard/search-icon.png" alt="logo" class="img-responsive search-img">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit">Search</button>
                                </form>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            
                              <tr >
                                <th scope="col">ADDED DATE</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">STATUS</th>
                                <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $date = $row['modifie_ddate'];
                                        $title = $row['title'];
                                        $category_name = $row['name'];
                                        $refe_data = $row['value'];
                                        $noteid = $row['id'];
                                        echo "<tr>
                                        <td>$date</td>
                                        <td>$title</td>
                                        <td>$category_name</td>
                                        <td>$refe_data</td>";
                                        if ($refe_data == 'Draft') {
                                                echo " <td>
                                                <a href='delete_draft.php?id=$noteid'>
                                                <img src='image/dashboard/delete.png' title='Click to delete' alt='Delete'></a>
                                                <a href='add-note.php?id=$noteid'>
                                                <img src='image/dashboard/edit.png' title='Click to Edit' alt='edit'></a>
                                            </td>
                                        </tr>";
                                        } else {
                                            echo " <td>
                                                <a href='note-details.php'>
                                                <img src='images/dashboard/eye.png' title='Click to View' alt='View'>
                                                </a>
                                            </td>
                                        </tr>";
                                        }
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination1 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php
                                    echo "<li class='page-item'><a class='page-link' href='dashboard.php?page=" . ($page - 1)
                                        . "'>❮</a></li>";
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        if ($i == $page) {
                                            echo "<li class='page-item active'><a class='page-link' href='dashboard.php?page=$i'>$i</a></li>";
                                        } else echo "<li class='page-item'><a class='page-link' href='dashboard.php?page=$i'>$i</a></li>";
                                    }
                                    echo "<li class='page-item'><a class='page-link' href='dashboard.php?page=" . ($page + 1)
                                        . "'>❯</a></li>";
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="published-notes">
        <div class="content-box">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="publish-heading">
                            <div class="item"><h5>Published Notes</h5></div>
                            <div class="item">
                                <form class="progress-search" action="/action_page.php">
                                    <img src="image/dashboard/search-icon.png" alt="logo" class="img-responsive search-img">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit">Search</button>
                                </form>   
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    if (isset($_GET["page_info"])) {
                        $page_info  = $_GET["page_info"];
                    } else {
                        $page_info = 1;
                    };
                    $start_from2 = ($page_info - 1) * $limit;

                    if (isset($_POST['search_2'])) {

                        $search_result2 = $_POST['search_result2'];

                        $query2 = "SELECT seller_notes.published_date,seller_notes.title,note_categories.name,
                                    reference_data.value,seller_notes.selling_price FROM seller_notes LEFT JOIN 
                                    note_categories ON seller_notes.category=note_categories.id LEFT JOIN
                                    reference_data ON seller_notes.is_paid=reference_data.id WHERE 
                                    seller_notes.title LIKE '%$search_result2%' AND seller_notes.status=6 
                                    ORDER BY seller_notes.modified_date DESC LIMIT $start_from2, $limit";

                        $result2 = mysqli_query($conn, $query2);

                        $result_num2 = mysqli_query($conn, "SELECT COUNT(id) FROM seller_notes WHERE title LIKE '%$search_result2%' AND status=6");
                        $row2 = mysqli_fetch_row($result_num2);
                        $total_records2 = $row2[0];
                        $total_pages2 = ceil($total_records2 / $limit);
                    } else {
                        $query2 = "SELECT seller_notes.published_date,seller_notes.title,note_categories.name,
                                    reference_data.value,seller_notes.selling_price FROM seller_notes LEFT JOIN 
                                    note_categories ON seller_notes.category=note_categories.id LEFT JOIN
                                    reference_data ON seller_notes.is_paid=reference_data.id WHERE 
                                    seller_notes.status=6 ORDER BY seller_notes.modified_date DESC LIMIT $start_from2, $limit";

                        $result2 = mysqli_query($conn, $query2);

                        $result_num2 = mysqli_query($con, "SELECT COUNT(id) FROM seller_notes WHERE status=6");
                        $row2 = mysqli_fetch_row($result_num2);
                        $total_records2 = $row2[0];
                        $total_pages2 = ceil($total_records2 / $limit);
                    }

                ?>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ADDED DATE</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">SELL TYPE</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">ACTIONS</th>
                              </tr>
                            </thead>
                            <?php
                                while ($row = mysqli_fetch_assoc($result2)) {
                                    $date2 = $row['published_date'];
                                    $title2 = $row['title'];
                                    $category_name2 = $row['name'];
                                    $refe_data2 = $row['value'];
                                    $sell_price = $row['selling_price'];
                                    echo "<tr>
                                        <td>$date2</td>
                                        <td>$title2</td>
                                        <td>$category_name2</td>
                                        <td>$refe_data2</td> 
                                        <td>$sell_price</td>
                                        <td> <a href='note-details.php'><img src='images/dashboard/eye.png' title='Click to View' alt='View'></a> </td>
                                         </tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination1 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <?php
                                echo "<li class='page-item'><a class='page-link' href='dashboard.php?page_info=" . ($page_info - 1)
                                    . "'>❮</a></li>";
                                for ($i = 1; $i <= $total_pages2; $i++) {
                                    if ($i == $page_info) {
                                        echo "<li class='page-item active'><a class='page-link' href='dashboard.php?page_info=$i'>$i</a></li>";
                                    } else echo "<li class='page-item'><a class='page-link' href='dashboard.php?page_info=$i'>$i</a></li>";
                                }
                                echo "<li class='page-item'><a class='page-link' href='dashboard.php?page_info=" . ($page + 1)
                                    . "'>❯</a></li>";
                            ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Popper -->
    <script src="js/popper/popper.min.js"></script>

    <!-- Custom jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>