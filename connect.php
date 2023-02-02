<?php

    $Sname = "localhost";
    $name = "root";
    $password = "";
    $DB = "eshop"; //database name

    //connection
    $con = mysqli_connect($Sname, $name, $password);
    if(!$con){
        ?>
        <script>
        alert ("Connection Successfully");
        </script>
        <?php
        echo "Unable to connect with web server!";
        die();
    }

    // database
    $db = mysqli_select_db($con, $DB);
    if(!$db){
        echo "Unable to connect with database!";
        die();
    }
    echo "";
?>