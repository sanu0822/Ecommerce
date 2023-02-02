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
    $email = $_POST['email'];
    $msg = $_POST['message'];
 
    $q = " select * from contact where name = '$name' && email = '$email' && message = '$msg' ";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);
 
    if($num == 1){
       echo "duplicate data";
    }else{
       $qy = " insert into contact(name, email, message) values ('$name', '$email' ,  '$msg') ";
       mysqli_query($con, $qy);
    }
?>

