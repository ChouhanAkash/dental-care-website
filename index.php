<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare</title>
   <!-- font awesome cdn link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!--bootstrap cdn link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <!--custom css file link-->
   <link rel="stylesheet" href="./style1.css">
</head>
<body>
    <?php
    include 'signup.php';
    include 'login.php';
    ?>
<!--header section-->
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental<span>Care.</span></a>
            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
            
            </nav>
            <a href="#signup" class="link-btn">signup</a>
                <a href="#login" class="link-btn">login</a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>

</header>
<!--header end-->
<!--home start-->
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-90vh align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam officia ipsa obcaecati illo itaque id voluptas error fugit ab quis? Alias possimus enim minima maiores nemo? Non ab consequuntur reiciendis!</p>
            <a href="#login" class="link-btn">click here to login</a>
            </div>
        </div>
    </div></section>
    <!--home section end-->
    <!--about start-->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
<div class="col-md-6 image"><img src="./images/about.png"
class="w-100 mb-5 mb-md-0" alt=""></div>
<div class="col-md-6 content">
<span>about us</span>
<h3>Tru Healthcare For Your Family</h3>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa illum qui voluptatem quo soluta et harum odit, non iusto dolores.</p>
<a href="#login" class="link-btn">login to contact us</a>
</div>
            </div>
        </div>
    </section>
    <!--about end-->
<!--service section starts-->
<section class="services" id="services">
    <h1 class="headings">our services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="./images/services1.png" alt="">
            <h3>Alignment Specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, neque!</p>
        </div>
        <div class="box">
            <img src="./images/services2.png" alt="">
            <h3>cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, neque!</p>
        </div>
        <div class="box">
            <img src="./images/services3.png" alt="">
            <h3>oral hygiene experts</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, neque!</p>
        </div>
        <div class="box">
            <img src="./images/services4.png" alt="">
            <h3>root canal specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, neque!</p>
        </div>
        <div class="box">
            <img src="./images/services5.png" alt="">
            <h3>live dental advisory</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, neque!</p>
        </div>
        <div class="box">
            <img src="./images/services6.png" alt="">
            <h3>cavityimspection</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, neque!</p>
        </div>
    </div></section>
<!--services ends-->
<!--process sections staart-->
<section class="process">
    <h1 class="headings">work process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="./images/services1.png" alt=""/>
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, praesentium.</p>
        </div>
        <div class="box">
            <img src="./images/services2.png" alt=""/>
            <h3>Pediatric Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, praesentium.</p>
        </div>
        <div class="box">
            <img src="./images/services3.png" alt=""/>
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, praesentium.</p>
        </div>
    </div>
</section>
<!--process end-->
<!--review start-->
<section class="reviews" id="reviews">
    <h1 class="headings">
        satisfied clients
    </h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/services4.png" alt=""/>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium modi facilis excepturi, accusantium tempora dolores officiis quo. Dolorum tenetur quibusdam aut sint maiores magnam similique numquam suscipit, eligendi quod officia!
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
    <span>satisfied client</span>
        </div>
        <div class="box">
            <img src="images/services5.png" alt=""/>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium modi facilis excepturi, accusantium tempora dolores officiis quo. Dolorum tenetur quibusdam aut sint maiores magnam similique numquam suscipit, eligendi quod officia!
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>rahul gandhi</h3>
    <span>satisfied client</span>
        </div>
        <div class="box">
            <img src="images/services6.png" alt=""/>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium modi facilis excepturi, accusantium tempora dolores officiis quo. Dolorum tenetur quibusdam aut sint maiores magnam similique numquam suscipit, eligendi quod officia!
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>pappu</h3>
    <span>satisfied client</span>
        </div>
    </div>
</section>
<!--review end-->
<!--signup start-->
<section class="signup" id="signup">
    <h1 class="headings">signup</h1>
    <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="post">
    <span>Username:</span>
<input type="text" name="r_name" placeholder="enter your full name" class="box" required>
<span>Mobile:</span>
<input type="number" name="r_number" placeholder="enter your mobile number" class="box"required>
<span>Email:</span>
<input type="email" name="r_email" placeholder="enter your email " class="box" required>
<span>password:</span>
<input type="password" name="password" placeholder="enter your password" class="box" required>
<span>confirm password:</span>
<input type="password" name="cpassword" placeholder="enter your confirm password" class="box" required>
<p class="ans"><?php echo"$ans";?></p>
<input type="submit" value="create account" name="submit" class="signupbtn"><span class="signinlog" required>     Click here to </span><span ><a href="#login" >login</a></span>
</form>
</section>
<!--contact start-->
<section class="signup" id="login">
    <h1 class="headings">Login</h1>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
    <h4 ><?php if(isset($_SESSION['result'])){
    echo $_SESSION['result'];}
     else{
    $_SESSION['result']=" ";
}

    ?></h4>
    <span>Username:</span>
<input type="email" name="log_user" placeholder="email or mobile number" class="box" value="<?php
if(isset($_COOKIE['emailcookie'])){echo $_COOKIE['emailcookie'];}
?>">
<span>Password:</span>
<input type="password" name="log_password" placeholder="enter your password" class="box"value="<?php
if(isset($_COOKIE['emailpasscookie'])){echo $_COOKIE['emailpasscookie'];}
?>">
<div class="remember"><input type="checkbox" name="rememberme"> Remember Me</div>
<input type="submit" value="Login" name="log_submit" class="signupbtn"><span class="signinlog"> 
        Click here to </span><span ><a href="#signup" >signup</a></span><br>
        <span class="signinlog"> <a href="recover_email.php" >Forgot password</a></span>
</form>
</section>
<!--contact end-->
<!--contact end-->
<!--footer start-->
<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+123-456-6789</p>
            <p>+233333333333</p>
        </div>
        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>mumbai,india</p>
        </div>
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>10:00am to 10:00pm</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address </h3>
            <p>atul@123</p>
            <p>akash@123</p>
        </div>
    </div>
    <p class="credit">created by <span>Akash chouhan</span></p>
</section>
<!--footer start-->

    <!--js file-->
    <script src="./script.js"></script>
</body>
</html>