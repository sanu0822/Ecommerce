<?php
    include ('connect.php');

// update
if(isset($_REQUEST['requpdate'])){
    //checking empty fields

    if( ($_REQUEST['id'] == "") || ($_REQUEST['name'] == "")  || ($_REQUEST['price'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated Failed</div>';
    }else{
            $cid = $_REQUEST['id'];
            $cname = $_REQUEST['name'];
            $cprice = $_REQUEST['price'];
            $cimg = '../ecommerce/img/'.$_FILES['img']['name'];

        $sql = "UPDATE courses SET id = '$cid', name = '$cname',price = '$cprice',img = '$cimg' WHERE id = '$cid'";
        
            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-succewss col-sm-6 ml-5 mt-2">Updated Successfully</div>';
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
    <title>courses</title>
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
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">Smart Learning <small class="text-white">Admin Area</small></a>
</nav>

<?php
    include 'Adminprofile.php';
?>
        <div class="col-sm-4 mt-5 mx-3 jumbotron" style="padding: 20px; margin-left: 30%; margin-top: -47%">
    <h3 class="text-center" style="font-family: 'robbin;">Update Card Details</h3>

   <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM shoppingcard WHERE id = {$_REQUEST['id']}";
         $result = $con->query($sql);
         $row = $result->fetch_assoc();        
    }
   ?>

    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="id">Card ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php if(isset($row['id'])) {echo $row['id']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="name">Card Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($row['name'])) {echo $row['name']; } ?>">
        </div>
        <div class="form-group">
            <label for="price">Card Price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php if(isset($row['price'])) { echo $row['price']; }?>">
        </div>
        <div class="form-group">
            <label for="img">Card Image</label>
            <img src="<?php if(isset($row['img'])) { echo $row['img']; }?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="img" name="img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="cards.php" class="btn btn-secondary">Close</a>
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