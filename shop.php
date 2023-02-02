<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Wesbite</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <link rel="stylesheet" href="css/style1.css">

    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            })
        });
    </script>
</head>
<body>
    <nav id="nav">
        <label class="logo" id="logo">Eshopping</label>
        <ul>
                <li><a href="#" class="active"> HOME </a></li>
                <li><a href="#mySidenav" onclick="openNav()"> PROFILE </a></li>
                <li><a href="#category"> CATEGORIES </a></li>
                <li><a href="#about"> ABOUT US </a></li>
                <li><a href="#contact"> CONTACT US </a></li>
                <li><a href="#cart"> CART </a></li>
                <li><a href="login1.php"> LOGIN </a></li>
                <a href="logout.php">LOGOUT</a>
        </ul>
        <label id="icon">
            <i class="fa fa-bars"></i>
        </label>
    </nav>

    <section class="main" id="main">
        <h2>WELCOME TO E-SHOP SPOT</h2>
        <p>Ecommerce is powerful means to connect the unconnected to global trade</p>
        <button><a href="#category" style="color: #fff; text-decoration: none"> SHOP NOW </a></button>
    </section>

    <!--profile sidenav -->

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h1>PROFILE</h1>
        <img src="../ecommerce/img/pic.png" alt="">
        <a href="customer.php"><i class="fa fa-user"> Edit Profile </i></a>
        <a href="customer.php"><i class="fa fa-hand-grab-o"> About me </i></a>
        <a href="#"><i class="fa fa-list"> My Whislist </i></a>
        <!-- <a href="Studentfeed.php"><i class="fa fa-user"> Feedback </i></a> -->
        <a href="shop.php"><i class="fa fa-power-off"> Logout </i></a>
      </div>
      

      <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          /* Set the width of the side navigation to 0 */
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
    
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
          }
          
          /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
          }
    </script>



    <!-- product details -->

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
                    <p><a href="payment (2).php">Shop Now</a></p>
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
                    <p><a href="payment (2).php">Shop Now</a></p>
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
                    <h2>Best of<br>Toys</h2>
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
                    <p><a href="payment (2).php">Shop Now</a></p>
                </div> ';
            }
        }
    ?>
             
                <!-- second line -->
                <div class="card1" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('../ecommerce/img/fashion.jpg');">
                    <h2>Best of<br>Fashion</h2>
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
                    <p><a href="payment (2).php">Shop Now</a></p>
                </div> ';
            }
        }
    ?>


            </div>
        </div>
    </section>
    

    <!-- About us part -->
    <section class="about-us" id="about">
        <div class="about-head">
        <h1>ABOUT US</h1>
        </div>
        <div class="para">
            <h2>ESHOP.com</h2>
            <h3>WHERE REAL INDIA SHOPS</h3>
            <p>ESHOP is India leading pure-play value Ecommerce Platform. ESHOP brings together a wide assortment of good quality and value priced merchandise on its pltform. ESHOP's vision is to enable the shoppers of Indian's experience the joy of living their aspirations through reliable,  value to offer great qua;lity products at affordable proces.</p>
            <p>Further, ESHOP's mission is to become India's value lifestyle omni-channel leader. We are excited about continuing to build a complete ecosystem around value ecommerce, where we can serve 'Bharat' consumers wherever they are on their offline shopping journey</p>
        </div>
        <div class="img-container">
            <div class="img1">
                <img src="../ecommerce/img/list.png" alt="Wait.....">    
            </div>
            <div class="img1">
                <img src="../ecommerce/img/visit.png"" alt="Wait.....">
            </div>
            <div class="img1">
                <img src="../ecommerce/img/sks.png"" alt="Wait.....">
            </div>
            <div class="img1">
                <img src="../ecommerce/img/merchand.png"" alt="Wait.....">
            </div>
        </div>

        <div class="icons-head">
            <h2>Explore Our Handles</h2>
        </div>
            <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube-play"></i>
            <i class="fa fa-twitter"></i>
        </div>
    </section>

    <!-- contact-us -->

    <section class="contact" id="contact">
        <div class="content">
              <h2>#Let's-talk</h2>
                <p>LEAVE A MESSAGE, we Love to hear from you! </p>
        </div>
        <div class="container">
            <div class="contactInfo" >
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Race Course Road,<br> Indore(MP)</p>
                        </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+91 7898941922</p>
                        </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>Eshopcared@gmail.com</p>
                        </div>
                </div>
            </div>
                <!-- Contact -->
                <div class="contactForm">
                    <form action="contact.php" method="POST">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                           <input type="name" name="name" required="required">
                           <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" required="required">
                            <span>Email</span>
                         </div>
                         <div class="inputBox">
                            <textarea required="required" name="message"></textarea>
                            <span>Type Your Message.....</span>
                         </div>
                         <div class="inputBox">
                            <input type="Submit" name="submit" value="Send">
                         </div>
                    </form>
                </div>
            
        </div>
     </section>
     
     <!-- feedback form -->
     <section class="feedback">
        <h1>FEEDBACK FORM</h1>
        <form action="feedback.php" method="POST">
            <span>Name:</span><input type="text" name="name" placeholder="Write your name where....." style="margin-left: 73px;"><br>
            <span>Contact no.:</span><input type="text" name="contactno" placeholder="Write your contatc number....."><br><br>
            <span>Message:</span><textarea name="message" id="" cols="35" rows="6" placeholder="Write some message here...."></textarea><br>
            <button type="Submit" name="submit" style="margin-left: 45%; margin-top: 20px; padding: 8px; font-weight: 600; font-family: montserrat; font-size: 20px; border-radius: 10px; cursor: pointer;">Send</button>
        </form>
     </section>

     <!-- footer part -->
     <section class="footer">
        <div class="foot">
            <h2>Download Our App</h2>
            <h4>Download app for Andriod and iso <br>mobile phone</h4>
            <img src="../ecommerce/img/play.png" alt="">
        </div>
        <div class="middle">
            <img src="../ecommerce/img/eshop.png" alt="">
            <h1>Eshopping</h1>
            <p>"Fashion & clothing is one makes you look awesome and unique from others!"<br>"Life is not perfect but your outfit can be."</p>
            <div class="icons" style="color: rgb(220, 202, 202);">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-youtube-play"></i>
                <i class="fa fa-twitter"></i>
            </div>
        </div>
        <div class="last">
            <h2>Useful Links</h2><br>
            <a href="#nav">Home</a><br>
            <a href="#category">Category</a><br>
            <a href="#about">About-Us</a><br>
            <a href="#contact">Contact-Us</a><br>
            <a href="#cart">Cart</a>
        </div>
     </section>
     <?php
   include('footer.php');
    ?>
</body>
</html>