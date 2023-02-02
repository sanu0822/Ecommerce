<?php
    include ('connect.php');

    if(isset($_REQUEST['newStuSubmitBtn'])){
        //checking for empty fields
        if(($_REQUEST['name'] == "")  || ($_REQUEST['email'] == "") ||($_REQUEST['password'] == "")){
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }else{

            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $sql = "INSERT INTO cutomer(name, email, password) VALUES ('$id', '$name', '$email', '$password')";

            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Customer Added Successfully</div>';
            } else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Student</div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add course</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

 <style>
    .box{
        position: fixed;
        bottom: 10px;
        right: 10px;
        margin-bottom: 5 0px;
    }
    .text-white{
        color: white;
        font-size: 15px;
        margin-left: 1px;
    }
    .vabra-brand{
        color: white;
        padding-top: 5px;
        font-size: 20px;
    }
</style>

</head>
<body>

<nav class="navbar navbra-dark fixed-top p-0 shadow" style="background-color: #225470;">
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">Eshopping <small class="text-white">Admin Area</small></a>
</nav>

<?php
    include 'Adminprofile.php';
?>

   <div class="col-sm-6 mt-5 mx-3 jumbotron" style="margin-left: 25%; margin-top: -45%;">
       <h3 class="text-center">Add New Customer</h3>
       <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="Cust.php" class="btn btn-secondary">Close</a>
        </div>
        
        <?php
            if(isset($msg)){echo $msg;}
        ?>
       </form>
   </div>
   </div>
    </div>
</div>
</div>
</div>
</body>
</html>