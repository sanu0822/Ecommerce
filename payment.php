<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <style>
            *{
   margin: 0;
   padding: 0;
}
header
{
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) ,url(bg1.jfif);
  height: 50vh;
  background-position: center;
  background-size: cover;
  clip-path: polygon(0 0, 100% 0, 100% 100%, 60% 87%, 0 100% );
}
nav{
  background-color: transparent;
  width: 100%;
  height: 80px;                  
}
nav ul{
  float: left;
  margin-left: 15%;
  padding: 20px;
}
nav ul li
{
  display: inline-block;
  margin-right: 10px;
}
nav ul li a{
  color: white;
  font-size: 18px;
  display: block;
  padding: 10px;
  font-family: sans-serif;
  font-weight: bold;
}
nav li a{
  color: white;
  text-decoration: none;
  font-size: 90%;
  font-weight: bold;
}
a:hover{
  background-color: orange;
  border-radius: 20px;
  transition: .5s;
}
nav input{
    border-radius: 20px;
    padding: 10px;
}
.main h1{
    margin-top: 8%;
  margin-left: 40%;
  font-size: 30px;
  color: white;
}
.container .text-center{
    text-align: center;
    margin-top: 40px;
    text-decoration-line: underline;
    text-underline-position: below;
    text-decoration-color: orange;
    text-underline-offset: 10px;
}
.container form{
  text-align: center;
  margin-top: 50px;
  padding: 20px;
}
.container form input{
  border-radius: 5px;
  padding: 5px;
}
/*CONTACTUS* */
.contactus img{
  margin-top: 2%;
  opacity: 0.6;
}
.contactus h1{
  text-align: center;
  padding: 25px;
  text-decoration-line: underline;
  text-underline-position: below;
  text-decoration-color: orange;
  text-underline-offset: 10px;
}
#contactus{
  position: relative;
  margin-top: 50px;
}
#contactus::before{
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.7;
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('contact.jpg');
}
#contact-box{
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: bold;
  padding-bottom: 34px;
  opacity: 0.8;
}
#contact-box input,
#contact-box textarea{
  width: 100%;
  padding: 10px;
  border-radius: 20px;
  font-size: 1.1rem;
}
#contact-box form{
 width: 40%;
}
#contact-box label{
 font-size: 1.3rem;
}
#contactus .btn2{
  background-color: grey;
  margin-top: 5%;
  font-size: 20px;
  padding: 10px;
  margin-left: 45%;
  font-weight: bold;
  width: 100px;
  border-color: orange;
  border-radius: 30px;
}
#contactus .btn2:hover{
  background-color: orange;
  transition: 0.5s;
}

</style>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                 <li><a href="#">Courses</a></li>
                <li><a href="payment.php">Payment Status</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Login</a></li>
                <input type="search" placeholder="Search....." required>
            </ul>
        </nav>
        <div class="main">
            <h1>Let's Get Started.....</h1>
        </div>
  </header>
<div class="container">
    <h2 class="text-center">PAYMENT STATUS</h2>
    <form action="" method="get">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label" style="font-weight: bold; font-size:20px">Order ID: 
            
                <input type="text" class="form-control mx-3">
            
                <input type="text" style="width: 40px; margin-left:10px; padding-left:15px;font-weight:bold; background:skyblue" class="btn btn-primary mx-4" value="view">
            </label>
        </div>
    </form>
</div>

<section id="contactus">
        <div class="contactus">
            <h1>CONTACT US</h1>
            <div id="contact-box">
             <form action="">
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" name="name" id="name" placeholder="Enter Your Name">
                   </div>
     
                   <div class="form-group">
                     <label for="name">Email:</label>
                     <input type="text" name="name" id="name" placeholder="Enter Your Email">
                  </div>
     
                  <div class="form-group">
                     <label for="name">Phone Number:</label>
                     <input type="text" name="name" id="name" placeholder="Enter Your Phone Number">
                  </div>
     
                  <div class="form-group">
                     <label for="name">Message:</label>
                     <textarea name="message" id="message" cols="30" rows="10"></textarea> 
              </form>
           <button class="btn2">SUBMIT</button>   
           </div>    
          </div> 
        </div>
     </section>
</body>
</html>