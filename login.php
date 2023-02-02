<?php
   session_start();
   
   $con = mysqli_connect('localhost','root');
   if($con){
      ?>
      <script>
         alert("connection successfully");
      </script>
      <?php
   }else{
      ?>
      <script>
         alert("connection unsuccessful");
      </script>
      <?php
   }

   mysqli_select_db($con, 'eshop');
   $email = $_POST['email'];
   $pass = $_POST['password'];

   $q = " select * from register where  email = '$email' && password = '$pass' ";
   $result = mysqli_query($con, $q);
   $num = mysqli_num_rows($result);

   if($num == 1){
      
    $_SESSION['email'] = $email;
    header('location:shop.php');

   }else{
     header('location:login1.php');
   }
?>