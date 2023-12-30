<?php session_start()?>
<?php 
include 'regconn.php ';
if(isset($_POST['log_submit'])){
    $log_email=$_POST['log_user'];
    $password=$_POST['log_password'];

    $email_search="SELECT * FROM `Dentalregistration` WHERE reg_email='$log_email'";
    $query=mysqli_query($conn,$email_search);
    $email_count=mysqli_num_rows($query);
    if($email_count){
        $email_pass=mysqli_fetch_assoc($query);
    
        $db_pass=$email_pass['password'];
        $_SESSION['username']=$email_pass['reg_username'];
        $pass_decode=password_verify($password, $db_pass);
        if($pass_decode){
            if(isset($_POST['rememberme'])){
setcookie('emailcookie',$log_email,time()+86400);
setcookie('emailpasscookie',$password,time()+86400);
header('location:home.php');
        }else{
            header('location:home.php');
        }}
        else{
           $_SESSION['result']="Username or password is invalid";
           header('location:index.php#login');
        }
        
    }
    else{
       $_SESSION['result']="Email does not exist";
}
}

?>
