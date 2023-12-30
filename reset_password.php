<?php
session_start();
ob_start();
?>
<?php 
include 'regconn.php';

    if(isset($_POST['submit'])){
        if(isset($_GET['token'])){

        $token=$_GET['token'];
$new_password=mysqli_real_escape_string($conn,$_POST['password']);
$reg_cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);


$pass=password_hash($new_password, PASSWORD_BCRYPT);
$cpass=password_hash($reg_cpassword, PASSWORD_BCRYPT);

    if($new_password === $reg_cpassword){
        $update_query="update `Dentalregistration` set  password='$pass' where  reg_token='$token' ";
$iquery=mysqli_query($conn,$update_query);
if($iquery){
$_SESSION['result']="Password update successfully";
header('location:index.php#login');
}
else{
    $_SESSION['reset']="Password is not updates";
    header('location:reset_password.php');
    
}}
else{
    
    $_SESSION['reset']="Password is not matching";
}
    }}
    
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
<body><section class="signup" id="signup">
    <h1 class="headings">Reset Password</h1>
    <form action = "" method ="post">
        <h4><?php  echo $_SESSION['reset'];?>
    <span>password:</span>
<input type="password" name="password" placeholder="enter your password" class="box" required>
<span>confirm password:</span>
<input type="password" name="cpassword" placeholder="enter your confirm password" class="box" required>
<input type="submit" value="Reset Password" name="submit" class="signupbtn" required>
</form>
</section></body></html>
