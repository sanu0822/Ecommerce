<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Nav</title>
    <style>
    .sidenav {
    height: 99vh; /* 100% Full-height */
    width: 18%; /* 0 width - change this with JavaScript */
    background-color: grey;
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  }
  
    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover {
    color: #f1f1f1;
  }

  
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .sidenav h1{
    color: #000;
    font-family: montserrat;
    font-size: 26px;
    padding: 5px;
    text-align: center;
  }
  .sidenav img{
    margin-left: 85px;
    border-radius: 50px;
    width: 42%;
    height: 15vh;
  }
  .sidenav a{
    color: #000;
    font-family: montserrat;
    font-size: 24px;
    font-weight: 700;
    margin-left: 50px;
    margin-top: 25px;
  }
  .sidenav a:hover{
    border-radius: 0px 10px;
    border: 2px solid white;
    box-shadow: 0px 2px 2px 0px white;
  }
    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
        <h1>PROFILE</h1>
        <img src="../ecommerce/img/pic.png" alt="">
        <a href="dashboard.php"><i class="fa fa-user"> Dashboard </i></a>
        <a href="admincard.php"><i class="fa fa-hand-grab-o"> Cards </i></a>
        <a href="card.php"><i class="fa fa-list"> Product </i></a>
        <a href="payment.php"><i class="fa fa-user"> Payment Status </i></a>
        <a href="shop.php"><i class="fa fa-power-off"> Logout </i></a>
      </div>
      

</body>
</html>