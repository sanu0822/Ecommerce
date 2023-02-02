<?php
    include ('connect.php');
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
    .table{
        margin-left: 32%;
    }
    .box{
        position: fixed;
        bottom: 65px;
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
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Eshopping <small class="text-white">Admin Area</small></a>
</nav>
<?php
    include 'Adminprofile.php';
?>
<div class="col-sm-9 mt-5">
    <!-----table------>
    <p class="bg-dark text-white p-2" style="background-color: black; color:white; padding:15px; font-size: 20px; font-family: 'robbin'; margin-left: 30%; margin-top: -64%; text-align: center;">List of Cards</p>
    <?php
        $sql = "SELECT *FROM shoppingcard";
        $result = $con->query($sql);
            if($result->num_rows > 0){
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Card Id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()){
           echo  '<tr>';
               echo '<th scope="row">'.$row['id'].'</th>';
               echo '<td>'.$row['name'].'</td>';;
               echo '<td>';
                 echo '
                 <form action="editcard.php" method="POST" class="dinl">
                 <input type="hidden" name="id" value='.$row["id"].'>
                 <button type="submit" class="btn btn-info mr-3" name="view" value="View">
                        <i class="fa fa-edit"></i>
                    </button>
                </form>
                    <form action="" method = "POST" class="dinl">
                    <input type="hidden" name="id" value='.$row["id"].'>
                     <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                        <i class="fa fa-trash"></i>
                     </button>
                    </form>
              </td>
           </tr>';
             } ?>
        </tbody>
    </table>
     <?php } else {
            echo " 0 Result";
    }
    
    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM shoppingcard WHERE id = {$_REQUEST['id']}";
            if($con->query($sql) == TRUE){
                echo '<meta http-equiv="refresh" content="0;url=?deleted" />';
            } else {
                echo 'Unable to Delete data';
            }
    }
    ?>
</div>
</div>

<div>
    <a class="btn btn-danger box" href="admincard.php">
        <i class="fa fa-plus"></i>
    </a>
</div>
</div>
</body>
</html>
