<?php
    include ('connect.php');

// update
if(isset($_REQUEST['submit'])){
    //checking empty fields

    if( ($_REQUEST['id'] == "") || ($_REQUEST['name'] == "")  || ($_REQUEST['email'] == "") ||($_REQUEST['password'] == "") ||($_REQUEST['phone'] == "") ||($_REQUEST['gender'] == "") ||($_REQUEST['occupation'] == "") ||($_REQUEST['pincode'] == "") ||($_REQUEST['city'] == "") ||($_REQUEST['state'] == "") ||($_REQUEST['img'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated Failed</div>';
    }else{
        
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $gender = $_REQUEST['gender'];
        $pincode = $_REQUEST['pincode'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $password = $_REQUEST['password'];
        $img = $_FILES['img']['name'];
        $img_temp = $_FILES['img']['tmp_name'];
        $img_folder = '../ecommerce/img/' .$img;
        move_uploaded_file($img_temp, $img_folder);

        $sql = "INSERT INTO cutomer (name, email, phone, gender, occupation, language, pincode, city, state, img) VALUES('$id', '$name', '$password', '$phone', '$gender', '$pincode', '$city', '$state', '$img')";
            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Update Successfully</div>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <title>Customer Profile</title>
    <style>
      .profile{
        margin-top: -50%;
      }
      .profile form{
        border-radius: 10px;
        box-shadow: 2px 2px 3px 3px blue;
        background-color: rgb(185, 188, 196);
        width: 40%;
        margin-left: 30%;
        /* margin-top: 60px;   */
        height: 130vh;
        font-family: monserrat;
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
        background-color: orange;
        transition: .5s;
      }
      form button{
        background-color: rgb(83, 83, 198);
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
</head>
<?php
    include 'profilenav.php';
?>
<body>
  <div class="profile">
    <form action="">
      <h1>Edit Profile</h1>
      <span>Full Name</span><br>
      <input type="text" name="name" placeholder="Enter name here...."><br>
      <span>Phone</span><br>
      <input type="number" name="phone" placeholder="Enter number here...."><br>
      <span>Email Id</span><br>
      <input type="email" name="email" placeholder="Enter email id here...."><br>
      <span>Gender</span><br>
      <select name="gender" id="gender">
        <option value=""></option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
      </select><br>
      <span>Language</span><br>
      <select name="language" id="language">
        <option value=""></option>
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
      </select><br>
      <span>Occupation</span><br>
      <input type="occupation" name="occupation" placeholder="Enter occupation here...."><br>
      <span>About me</span><br>
      <input type="text" name="about" placeholder="About me...."><br>
      <span>Pin Code</span><br>
      <input type="number" name="pincode" placeholder="pincode...."><br>
      <span>City</span><br>
      <input type="text" name="city" placeholder="Enter city...."><br>
      <span>State</span><br>
      <input type="text" name="state" placeholder="Enter State"><br>
      <label for="img">Upload image</label><br>
      <input type="file" class="form-control-file" name="img" id="img"><br>
      <button type="submit"><a href="#">Save</a></button>
    </form>
  </div>
  <?php
   include('footer.php');
  ?>
</body>
</html>