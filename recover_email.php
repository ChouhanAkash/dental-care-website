<?php session_start();
$_SESSION['recover']=" ";
ob_start();
?>
<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require ('phpmailer/Exception.php');
    require ('phpmailer/SMTP.php');
    require ('phpmailer/PHPMailer.php'); 
        
    
    if(isset($_POST['submit'])){
        include 'regconn.php';
$reg_email=mysqli_real_escape_string($conn,$_POST['recover_email']);

$emailquery="SELECT * FROM `Dentalregistration`  where reg_email='$reg_email'";
$query=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($query);
if($emailcount){
    $userdata=mysqli_fetch_array($query);
    $username=$userdata['reg_username'];
    $token=$userdata['reg_token'];
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'aakashchouhan2911@gmail.com';                     //SMTP username
        $mail->Password   = 'qfycojzzvwfyjlnp';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('aakashchouhan2911@gmail.com', 'Reset Password ');
        $mail->addAddress($reg_email);     //Add a recipient
        
    
          //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'dentalcare';
        $mail->Body    = "HI,$username.Click here too activate your account
        http://localhost/dentistproject/reset_password.php?token=$token";
    
        $mail->send();
        $_SESSION['result']="Please check your Email $reg_email";
        header('location:index.php#login');
        
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }
    } 
    else{
$_SESSION['recover']="Email does not exist";
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
<body>
<section class="signup">
    <h1 class="headings">Recover your Account</h1>
    <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST">
    <div ><?php echo $_SESSION['recover'];?></div>
<span>Email:</span>
<input type="email" name="recover_email" placeholder="enter your email " class="box" required>
<input type="submit" value="Send Mail" name="submit" class="signupbtn"><span class="signinlog" required>     
</form>
</section>
</body>
</html>