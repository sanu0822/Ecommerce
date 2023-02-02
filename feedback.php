<?php
   session_start();
   header('location: shop.php');
   $con = mysqli_connect('localhost','root');

   if($con){
        echo "connection successfully";
    }else{
        echo "no connection";
    }

    mysqli_select_db($con, 'eshop');
    $name = $_POST['name'];
    $contactno = $_POST['contactno'];
    $msg = $_POST['message'];
 
    $q = " select * from feddback where name = '$name' && contactno = '$contactno' && message = '$msg' ";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);
 
    if($num == 1){
       echo "duplicate data";
    }else{
       $qy = " insert into feddback(name, contactno, message) values ('$name', '$contactno' ,  '$msg') ";
       mysqli_query($con, $qy);
    }
?>

