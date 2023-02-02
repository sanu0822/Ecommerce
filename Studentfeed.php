<?php
    if(!isset($_SESSION)){
        session_start();
        include 'connect.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
 <style>
</style>
</head>
<body>
<?php
    include 'profilenav.php';
?>
<?php

mysqli_select_db($con, 'eshop');
$id = $_POST['id'];
$msg = $_POST['message'];

$q = " select * from feedback where id = '$id' && message = '$msg' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
   echo "duplicate data";
}else{
   $qy = " insert into feedback(id, message) values ('$id',  '$msg') ";
   mysqli_query($con, $qy);
}

?>

        <div class="col-sm-6 mt-5" style="margin-left: 20%; margin-top: -40%;">
        <form class="mx-5" method="POST" enctype="multipart/form-data" action="feedback.php">
        <div class="form-group">
            <label for="f_id">Customer ID</label>
            <input type="text" class="form-control" id="f_id" name="f_id" value=" <?php if(isset($f_id)) {echo $f_id;} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="f_content">Write Feedback.....</label>
            <textarea class="form-control" id="f_content" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submitfeedbackBtn">Submit</button>
        <?php if(isset($passmsg)) {echo $passmsg; }?>
</form>
        </div>
    </div>
</body>
</html>
<?php
   include('footer.php');
?>
