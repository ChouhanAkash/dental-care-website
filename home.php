<?php session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>
<?php 

$conn=mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name =  mysqli_real_escape_string($conn,$_POST['name']);
    $email =  mysqli_real_escape_string($conn,$_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn,"INSERT INTO `contactdentist` (name, email, number, date) VALUES ('$name','$email','$number','$date')") or die('query failed');

 if($insert){
    $message[]='appointment  made successfully!';
}else{
    $message[]='appointment failed';
}
}
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
   <link rel="stylesheet" href="./style.css">
</head>
<body>
<!--header section-->
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental<span>Care.</span></a>
            <nav class="nav">
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
                <a href="logout.php">Logout</a>
            </nav>
            <a href="#contact" class="link-btn">make  appointment</a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>

</header>



      
<h1>hello this is<?php echo $_SESSION['username']?></h1>
<!--contact start-->
<section class="contact" id="contact">
    <h1 class="headings">make appointment</h1>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
    <?php 
    if(isset($message)){
        foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
    }
    ?>
    <span>your name:</span>
<input type="text" name="name" placeholder="enter your name" class="box" required/>
<span>your email:</span>
<input type="email" name="email" placeholder="enter your email" class="box"required/>
<span>your number:</span>
<input type="number" name="number" placeholder="enter your number" class="box" required/>
<span>appointment date :</span>
<input type="datetime-local" name="date"  class="box" required/>
<input type="submit" value="make appointment" name="submit" class="link-btn">
</form>
</section>
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