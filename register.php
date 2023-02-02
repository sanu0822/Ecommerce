<?php
   session_start();
   include 'connect.php';
   header('location: login1.php');
   $con = mysqli_connect('localhost','root');
   if($con){
      echo "connection successfully";
   }else{
      echo "no connection";
   }

   mysqli_select_db($con, 'eshop');
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];

   $q = " select * from register where name = '$name' && email = '$email' && password = '$pass' ";
   $result = mysqli_query($con, $q);
   $num = mysqli_num_rows($result);

   if($num > 0){
      echo "Already register";
   }else{
      if($pass === $pass){
      $qy = " insert into register(name, email, password) values ('$name', '$email' ,  '$pass') ";
      mysqli_query($con, $qy);
      }else{
         echo "Password are not matched";
      }
   }




//    if(isset($_POST['Submit'])){

//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];

// $query = "INSERT INTO register (name,email,password) VALUES (\"$name\",\"$email\",\"$password\")";
// $insert = mysqli_query ($con,$query);

// print '<script> alert ("'. $insert .'")</script>';

//    if ($insert)
//  {
//  echo '<script> alert ("Registeration sucessfully")</script>';
 
// }
// else
// {
//     echo '<script> alert("Registeration Unsuccessfully")</script>';
// }
// }
?>
