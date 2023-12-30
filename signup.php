<?php 
include 'regconn.php';
    $ans="";
    if(isset($_POST['submit'])){
$reg_username=mysqli_real_escape_string($conn,$_POST['r_name']);
$reg_number=mysqli_real_escape_string($conn,$_POST['r_number']);
$reg_email=mysqli_real_escape_string($conn,$_POST['r_email']);
$reg_password=mysqli_real_escape_string($conn,$_POST['password']);
$reg_cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
$pass=password_hash($reg_password, PASSWORD_BCRYPT);
$cpass=password_hash($reg_cpassword, PASSWORD_BCRYPT);
$token=bin2hex(random_bytes(15));
$emailquery="SELECT * FROM `Dentalregistration` WHERE reg_email='$reg_email'";
$query=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($query);
if($emailcount>0){
  $ans= "email already exist";
}else{
    if($reg_password ==$reg_cpassword){
$insertquery="INSERT INTO `Dentalregistration` (`reg_username`, `reg_email`, `reg_mobile`, `password`, `cpassword`, `reg_token`, `status`) 
VALUES ('$reg_username','$reg_email','$reg_number','$pass','$cpass','$token','inactive')";
$iquery=mysqli_query($conn,$insertquery);
$ans="successfull emetete";
    }else{
        $ans="password are not matching";
    }
}
    }
    
    ?>