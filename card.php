<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-details{
    width: 100%;
    height: 100vh;
    /* background-color: #788ca0;    */
    margin-top: -10px;
}
.product-head h1{
    font-size: 32px;
    font-weight: bold;
    font-family: montserrat;
    /* text-shadow: 2px 2px #be9721; */
    text-align: center;
    padding: 20px;
    text-underline-position: auto;
    text-decoration-line: underline;
    text-underline-offset: 15px;
    text-decoration-color:  #000;
    text-decoration-thickness: inherit;
}
.grid-cards{
    /* display: inline-block; */
    padding-top: 20px;
    padding-bottom: 50px;
}
.grid-cards .card{
    /* border: 2px solid black; */
    display: inline-block;
    margin: 10px;
    margin-left: 10px;
    width: 220px;
    height: 38vh;
    border-radius: 10px;
    /* background: #788ca0; */
    overflow: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,0.1);
    transition: 0.5s;
}
.grid-cards:hover .card{
    filter: blur(0px);
    transform: scale(1.1);
    opacity: 1;
}
.grid-cards .card1{
    /* border: 2px solid black; */
    display: inline-block;
    background-size: cover;
    margin: 10px;
    margin-left: 20px;
    width: 220px;
    height: 38vh;
    border-radius: 10px;
    background: #788ca0;
    overflow: hidden;
    box-shadow: 0 3px 6px rgba(25, 32, 236, 0.958);
    transition: 0.5s;
}
/* product cards */
.card1 h2{
    font-size: 30px;
    font-family: montserrat;
    font-weight: 800;
    text-align: center;
    padding: 20px;
}
.card1 button{
    border-radius: 8px;
    padding: 0 8px;
    font-weight: 800;
    margin-left: 60px;
    font-size: 16px;
    background-color: #6a7074;
}
.card1 button:hover{
    background-color: orange;
    transform: 0.5s;
}
.card h2{
    font-size: 24px;
    font-family: montserrat;
    font-weight: bold;
    text-align: center;
}
.card p{
    font-size: 20px;
    font-family: montserrat;
    font-weight: bold;
    text-align: center;
}
.card img{
    width: 150px;
    height: 150px;
    margin-left: 35px;
    margin-top: 10px;
}
    </style>
</head>
<body>
<section class="product-details" id="category">
        <div class="product-head">
            <h1> CATEGORIES </h1>
        </div>
        
        <div class="product-cards">
            <div class="grid-cards">
                <div class="card1" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('../ecommerce/img/elec.jpg');">
                    <h2>Best of<br>Electronics</h2>
                    <button>View All</button>
                </div>


                <?php
               $sql = "SELECT * FROM shoppingcard LIMIT 5";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $id = $row['id'];
                        echo '
                <div class="card">
                    <img src="'.$row['img']. '" alt="Waiting..">
                    <h2>'.$row['name']. '</h2>
                    <h2 style="font-size: 20px; color: brown;">'.$row['price']. '</h2>
                    <p><a href="#">Shop Now</a></p>
                </div> ';
            }
        }
    ?>

                <!-- second line -->
                <div class="card1" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('../ecommerce/img/home1.jpg');">
                    <h2>Best of<br>Home</h2>
                    <button>View All</button>
                </div>

                <?php
               $sql = "SELECT * FROM shoppingcard LIMIT 5, 5";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $id = $row['id'];
                        echo '
                <div class="card">
                    <img src="'.$row['img']. '" alt="Waiting..">
                    <h2>'.$row['name']. '</h2>
                    <h2 style="font-size: 20px; color: brown;">'.$row['price']. '</h2>
                    <p><a href="#">Shop Now</a></p>
                </div> ';
            }
        }
    ?>
             

            </div>
        </div>

        <!-- second part of the product details -->

        <div class="product-cards">
            <div class="grid-cards">
                <div class="card1" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('../ecommerce/img/toys.jpg');">
                    <h2>Best of<br>Electronics</h2>
                    <button>View All</button>
                </div>

                <?php
               $sql = "SELECT * FROM shoppingcard LIMIT 10, 5";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $id = $row['id'];
                        echo '
                <div class="card">
                    <img src="'.$row['img']. '" alt="Waiting..">
                    <h2>'.$row['name']. '</h2>
                    <h2 style="font-size: 20px; color: brown;">'.$row['price']. '</h2>
                    <p><a href="#">Shop Now</a></p>
                </div> ';
            }
        }
    ?>
             
                <!-- second line -->
                <div class="card1" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('../ecommerce/img/fashion.jpg');">
                    <h2>Best of<br>Home</h2>
                    <button>View All</button>
                </div>

                <?php
               $sql = "SELECT * FROM shoppingcard LIMIT 15, 5";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $id = $row['id'];
                        echo '
                <div class="card">
                    <img src="'.$row['img']. '" alt="Waiting..">
                    <h2>'.$row['name']. '</h2>
                    <h2 style="font-size: 20px; color: brown;">'.$row['price']. '</h2>
                    <p><a href="#">Shop Now</a></p>
                </div> ';
            }
        }
    ?>


            </div>
        </div>
    </section>
</body>
</html>