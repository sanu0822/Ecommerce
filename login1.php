<?php 
    include 'connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="./css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="container" id="main">
            <div class="sign-up">
                <form action="register.php" method="POST">
                    <h1>Create Account </h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social"><i class="fa fa-linkedin"></i></a>   
                    </div>
                    <h4>or use your email for registration</h4> 
                    <!-- <p> or use your email for registration</p> -->
                    <input type="name" name="name" placeholder="Name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <button onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" type="Submit">Sign Up</button>
                </form>
            </div>
            <div class="sign-in">
                <form action="login.php" method="POST">
                    <h1>Sign-in </h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social"><i class="fa fa-linkedin"></i></a>   
                    </div>
                    <h4>or use your account</h4>
                    <!-- <p> or use your account</p> -->
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <a href="#">Forget a password</a>
                    <button onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" type="Submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h1>Welcome Back</h1>
                        <p>To keep connected with us please login with your personal details</p>
                        <button id="signIn" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" name="submit">Sign In</button>
                    </div>
                    <div class="overlay-right">
                        <h1>Hello, Eshoper</h1>
                        <p>Enter your personal details and start your journey with us</p>
                        <button id="signUp" class="button" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" name="submit">Sign Up</button>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const main = document.getElementById('main');

            signUpButton.addEventListener('click',() => {
                main.classList.add("right-panel-active");
            })

            signInButton.addEventListener('click',() => {
                main.classList.remove("right-panel-active");
            })
        </script>
    </body>
</html>