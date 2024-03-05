<?php
 require('db_conn.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
   
// validation
    if(!empty(trim($_POST['name'])) && !empty(trim($_POST['password'])))
    {


            // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (name, password, email, create_datetime)
                     VALUES ('$name', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            $_SESSION['email'] = $email;
           echo "your account has been created";
            //Redirect user to welcome page
            header("location:  welcome.php");



            {
                // Server settings
                $mail->SMTPDebug = 2;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'live.smtp.mailtrap.io';                 // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'api';                     // SMTP username
                $mail->Password   =  '28be2c4ea1457341c15949bbe607e378';                               // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       =  587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                // Recipients
                $mail->setFrom('pdfplaza@gmail.com', 'PDF PLAZA');
                $mail->addAddress('atthewarrior@gmail.com', 'Joe User');     // Add a recipient
               // $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');
                // Attachments
               // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = ' Welcome to the Uplifting Sounds of Gospel Music for Alls!';
                $mail->Body    = '
                

Dear User,

Warm greetings and a joyful welcome to Gospel Music for Alls, your haven for exploring the rich tapestry of gospel music!

Were delighted to have you can immerse yourself in the power and inspiration of gospel melodies. Whether youre a seasoned listener seeking familiar hymns or a curious newcomer venturing into this vibrant genre, we offer a vast library catering to every taste.

Within our digital walls, youll discover:

A diverse collection:From traditional hymns to contemporary praise and worship, explore various subgenres and find music that resonates with your soul.
Convenient access: Download and play your favorite gospel songs with ease, creating a personalized playlist that uplifts you throughout the day.
Continuous exploration: Discover new artists, delve into classic masterpieces, and broaden your gospel music horizons.

At Gospel Music for Alls, we believe that the spirit of gospel transcends any boundaries. Its a universal language that speaks to the heart, offering solace, hope, and inspiration.

So, embark on your musical journey with us. Download, listen, and let the uplifting energy of gospel music fill your life with joy and peace.

Welcome to the community of music lovers united by the power of gospel!

Sincerely,

The Gospel Music for Alls Team

                
                ';
                $mail->AltBody = 'lorpsz';
                $mail->send();
                echo 'Message has been sent';
            } 






        } else {
            echo "try";
        }
    } 





    }else{echo "field can't be empty";}
    
 
?>