<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
if(isset($_POST['password-reset-token']) || $_POST['email'])
{
    include "db_conn.php";
    
    
    $emailId = $_POST['email'];

    $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $emailId . "'");

    $row= mysqli_fetch_array($result);

  if($row)
  {
    
     $token = md5($emailId).rand(10,9999);

     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );

    $expDate = date("Y-m-d H:i:s",$expFormat);

    $update = mysqli_query($con,"UPDATE users set   reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");

    $link = "<a href='localhost/code/reset.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";

   // Server settings
   $mail->SMTPDebug = 2;                      // Enable verbose debug output
   $mail->isSMTP();                                            // Send using SMTP
   $mail->Host       = 'sandbox.smtp.mailtrap.io';                 // Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   $mail->Username   = '3c71f7c2aabde9';                     // SMTP username
   $mail->Password   =  '8f4bffc9994b00';                               // SMTP password
   $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
   $mail->Port       =  2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
 
    $mail->From='your_gmail_id@gmail.com';
    $mail->FromName='your_name';
    $mail->AddAddress('xx@gmail.com', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    $mail->send();
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>