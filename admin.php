<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>admin login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
			background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('../ecommerce/img/image3.png');
			background-size: cover;
		}
   .container h1{
       color: white;
       font-family: 'robbin';
       font-size: 40px;
       font-weight: bold;
       display: inline-block;
       padding: 20px 0;
       border-bottom: 5px solid purple;
       margin-bottom: 15px;
   }
   .container{
       position: absolute;
       top: 25%;
       left: 43%;
       position: absolute;
   }
   .box{
       margin: 22px 0px;
   }
   .box input{
       width: 85%;
       border: none;
       font-family: 'robbin';
       background: none;
       border-bottom: 3px solid purple;
       margin-bottom: 20px;
       margin: 2px 10px;
       font-size: 20px;
       outline: none;
       float: right;
       color: white;
       padding: 5px 10px;
   }
   .box i{
       color: white;
       margin: 2px 10px;
       font-size: 20px;
       padding: 5px 10px;
   }
   .btn{
	cursor: pointer;
    outline: none;
    width: 25%;
    color: #000;
    margin: 12px 0;
    padding: 10px 15px;
    font-weight: bold;
    margin-left: 30%;
    font-size: 20px;
    background: none;
    border-radius: 25px;
    border: 2px solid purple;
   }
   .btn:hover{
       color: purple;
       background-color: white;
       transition: 0.5s;
   }
    </style>
</head>
<body>
<form method="POST">
<div class="container">
    <h1>Admin Login</h1>
    <div class="box">
    <i class="fa fa-envelope"><input type="email" class="form-control" name="adminemail" id="adminemail" placeholder="Enter your email"></i>
    </div>
    <div class="box">
    <i class="fa fa-key"><input type="password" class="form-control" name="adminpass" id="adminpass" placeholder=" Enter your Password"></i>
    </div>
    <button class="btn" name="login">Login</button>
</div>
</form>

<?php
    if(isset($_POST['login'])){
       $query="SELECT * FROM 'admin' WHERE 'admin_name'='$_POST[adminemail]' AND 'admin_pass'='$_POST[adminpass]'";
       $result= mysqli_query($con,$query);
        if(mysqli_num_rows($result)==0){
            session_start();
            $_SESSION['admin_id']=$_POST['admin_name'];
            header("location: dashboard.php");
        } else{
            echo "<script>alert('Incorrect');</script>";
        }
    }
?>


</body>
</html>