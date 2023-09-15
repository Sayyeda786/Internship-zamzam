<?php
session_start();
$con = new mysqli("localhost", "root", "", "zamzam-acc");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function send_password_reset($get_fname, $get_lname, $get_email, $token){
    $mail= new PHPMailer(true);
    $mail ->isSMTP();
    $mail->SMTPAuth = true;
                                           
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'abbas2@gmail.com';                     //SMTP username
    $mail->Password   = ""; 
                                  
    $mail->SMTPSecure = "tls" ;         
    $mail->Port       = 587;                                    
    
    $mail->setFrom("abbas2@gmail.com", $get_fname);
    $mail->addAddress($get_email); 
    
    $mail->isHTML(true);
    $mail->Subject = "Reset Password Notification";
    
    $email_template = "
    <h2>Hello</h2>
    <h3>You are receiving this email because we recieved a password reset request for your account.</h3>;
    <br/><br/>
    <a href='http://localhost/ZAM%20ZAM/password-change.php?token=$token&email=$get_email'> Click Me </a>";
    
    $mail->Body = $email_template;
    $mail->send();

   
    
}
if(isset($_POST['reset-request-submit'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $token = md5(rand());
    $check_email = "SELECT * FROM register WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run) >0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_fname = $row['fname'];
        $get_lname = $row['lname'];
        $get_email = $row['email'];

        $update_token = "UPDATE register SET verify_token='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con,$update_token);

        if($update_token_run)
        {
            send_password_reset($get_fname, $get_lname, $get_email, $token);
            $_SESSION['status'] =" We emailed you a password reset link";
            header("Location: password-reset.php");
            exit(0);
        }

        }
        else
        {
            $_SESSION['status'] ="Something went wrong #1 ";
            header("Location: password-reset.php");
            exit(0);
        }

    }
    else
    {
        $_SESSION['status'] ="No email found";
        header("Location: password-reset.php");
        exit(0);
    }



?>