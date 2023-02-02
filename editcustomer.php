<?php
    include ('connect.php');

// update
if(isset($_REQUEST['newStuSubmitBtn'])){
    //checking empty fields

    if( ($_REQUEST['id'] == "") || ($_REQUEST['name'] == "")  || ($_REQUEST['email'] == "") ||($_REQUEST['password'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated Failed</div>';
    }else{
        
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql = "UPDATE cutomer SET id = '$id', name = '$name',password = '$password' WHERE id = '$id'";
            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
            } else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
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
    <title>Edit customer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    .text-white{
        color: white;
        font-size: 15px;
        margin-left: 1px;
    }
    h3{
        text-align: center;
    }
    .vabra-brand{
        color: white;
        padding-top: 5px;
        font-size: 20px;
    }
    footer{
        margin-top: 20px;
    }
    .dinl{
        display: inline;
    }
    .btn-secondary{
        margin-left: 10px;
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

        <div class="col-sm-6 mt-5 mx-3 jumbotron" style="padding: 20px; margin-left: 20%; margin-top: -40%;">
   

   <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM cutomer WHERE id = {$_REQUEST['id']}";
         $result = $con->query($sql);
         $row = $result->fetch_assoc();        
    }
   ?>

<div class="col-sm-6 mt-5 mx-3">
       <h3 class="text-center">Update Customer Detail</h3>
       <form action="" method="POST" enctype="multipart/form-data">
       <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php if(isset($row['id'])) {echo $row['id']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id=" name" name="name" value="<?php if(isset($row['name'])) {echo $row['name']; } ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($row['email'])) {echo $row['email']; } ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?php if(isset($row['password'])) {echo $row['password']; } ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="customer.php" class="btn btn-secondary">Close</a>
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
<?php
    include('footer.php');
?>