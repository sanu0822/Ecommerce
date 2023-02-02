<?php
    include ('connect.php');

    if(isset($_REQUEST['cardSubmitBtn'])){
        //checking for empty fields
        if(($_REQUEST['name'] == "") || ($_REQUEST['price'] == "")){
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }else{

            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $img = $_FILES['img']['name'];
            $img_temp = $_FILES['img']['tmp_name'];
            $img_folder = '../ecommerce/img/' .$img;
            move_uploaded_file($img_temp, $img_folder);

            $sql = "INSERT INTO shoppingcard (name, price, img) VALUES ('$name', '$price', '$img')";

            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Card Added Successfully</div>';
            } else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Card</div>';
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
    <title>Add card details</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</style>
</head>
<body>
    <?php
        include 'Adminprofile.php';
    ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron" style="padding: 20px; margin-left: 25%; margin-top: -44%; ">
    <h3 class="text-center">Add New Product</h3>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="img">Card img</label>
            <input type="file" class="form-control-file" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="name">Card Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price">Card Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="cardSubmitBtn" name="cardSubmitBtn">Submit</button>
            <a href="dashboard.php" class="btn btn-secondary">Close</a>
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
    include 'footer.php';
?>
</body>
</html>