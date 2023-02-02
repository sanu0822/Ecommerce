<?php  
session_start();  
  include 'connect.php';

//connection
// $con = mysqli_connect($server, $name, $password,$DB);
// $name=$_SESSION['email'];
// $sql="SELECT * FROM registration WHERE email ='$name'";
// $result=mysqli_query($con,$sql);
// $info=mysqli_fetch_assoc($result);

// update profile button
if(isset($_POST['update_profile'])){
        $s_name=$_POST['name'];
        $s_email=$_POST['email'];
        $s_phone=$_POST['phone'];
         $s_gender=$_POST['gender'];
         $s_occupation=$_POST['occupation'];
         $s_pincode=$_POST['pincode'];
         $s_city=$_POST['city'];
        $s_state=$_POST['state'];
        $s_img=$_POST['img'];

        $sql2="UPDATE registration SET email='$s_email' WHERE email='$name'";
        $result2=mysqli_query($con,$sql2);
            if($result2){
              ?>
                <script>
                alert("Update Successfully");
                </script> 
                 <script>
                          location.replace("Aftershop.php");
                  </script> 
              <?php
            }

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <title>Customer Profile</title>
    <style>
      .cont{
        display: flex;
      }
      /* .profile{
      // margin-top: -38%;
      } */
      .profile form{
        border-radius: 10px;
        box-shadow: 2px 2px 3px 3px blue;
        background-color: rgb(185, 188, 196);
        width: 140%;
        margin-left: 40%;
        /* height: 100vh; */
        font-family: monserrat;
        margin-bottom :20px;
        
      }
      form h1{
        text-align: center;
        padding: 8px;
      }
      form span{
        font-weight: bold;
        font-size: 16px;
        margin-top: 10px;
        margin-left: 120px;
      }
      form input{
        margin-left: 120px;
        padding: 5px;
        margin-top: 5px;
        border-radius: 5px;
        margin-bottom: 10px;
        width: 50%;
      }
      form select,button{
        margin-left: 120px;
        width: 50%;
        margin-top: 8px;
        border-radius: 5px;
      }
      form button:hover{
        background-color: black;
        transition: .5s;
      }
      form button{
        background-color: rgb(83, 83, 198);
        margin: 122px;
        
        
      }
      form button a{
        text-decoration: none;
        font-weight: bold;
        font-family: montserrat;
        font-size: 20px;
        color: #fff;
      }
      form label{
        font-size: 16px;
        font-weight: bold;
        margin-left: 120px;
      }
    </style>
     <style>
      
    .sidenav {
    height: 120vh; /* 100% Full-height */
    width: 20%; /* 0 width - change this with JavaScript */
    background-color: grey;
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  }
  
    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover {
    color: #f1f1f1;
  }

  
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .sidenav h1{
    color: #000;
    font-family: montserrat;
    font-size: 26px;
    padding: 5px;
    text-align: center;
  }
  .sidenav img{
    margin-left: 85px;
    border-radius: 50px;
    width: 42%;
    height: 15vh;
  }
  .sidenav a{
    color: #000;
    font-family: montserrat;
    font-size: 24px;
    font-weight: 700;
    margin-left: 50px;
    margin-top: 25px;
  }
  .sidenav a:hover{
    border-radius: 0px 10px;
    border: 2px solid white;
    box-shadow: 0px 2px 2px 0px white;
  }
  </style>
</head>


<body>
  <div class="cont">
  <div id="mySidenav" class="sidenav">
        <h1>PROFILE <?php  
echo $_SESSION['email'];  
?> </h1>
        <img src="img/pic.png"  alt="">
        <a href="customer.php"><i class="fa fa-user"> Edit Profile </i></a>
        <a href="shop.php"><i class="fa fa-hand-grab-o"> About me</i></a>
        <a href="#"><i class="fa fa-list"> My Whislist </i></a>
        <a href="studentfeed.php"><i class="fa fa-user"> Feedback </i></a>
        <a href="regis.php"><i class="fa fa-power-off"> Logout </i></a>
      </div>
      

        <div class="profile">
          <form action="#" method="POST">
            <h1>Edit Profile</h1>
            <span>Full Name</span><br>
            <input type="text" name="name" value="" placeholder="Enter name here...."><br>
            <span>Email Id</span><br>
            <input type="email" name="email" value="" placeholder="Enter email id here...."><br>
            <span>Phone</span><br>
            <input type="number" name="phone" placeholder="Enter number here...."><br>
            <span>Gender</span><br>
            <select name="gender" id="gender">
              <option value=""></option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select><br>
            <span>Occupation</span><br>
            <input type="occupation" name="occupation" placeholder="Enter occupation here...."><br>
            <span>Pin Code</span><br>
            <input type="number" name="pincode" placeholder="pincode...."><br>
            <span>City</span><br>
            <input type="text" name="city" placeholder="Enter city...."><br>
            <span>State</span><br>
            <input type="text" name="state" placeholder="Enter State"><br>
            <label for="img">Upload image</label><br>
            <input type="file" class="form-control-file" name="img" id="img"><br>
            <button type="submit" name="update_profile"><a href="#">Save</a></button>
          </form>
        </div>
  </div>
  <?php
   include('footer.php');
  ?>
</body>
</html>