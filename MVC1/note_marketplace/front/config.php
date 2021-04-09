<?php
    /* this contain database information*/

    $DB_SERVER = "localhost";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $DB_NAME = "note_marketplace";

    /* connect database */
    $conn = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

    // CHECK CONNECTION
    if($conn == true)
    {
        ?>
            <script>
                alert("connection successful");
            </script>
        <?php
    }else
    {
        ?>
            <script>
                alert("connection failed");
            </script>  
        <?php  
    }
?>