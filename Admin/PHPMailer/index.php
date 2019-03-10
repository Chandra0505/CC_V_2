<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require '.../vendor/autoload.php';

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/Exception.php';

require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();                                      
    $mail->Host = '	smtp.gmail.com';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'prachandk05@gmail.com';                 // SMTP username
    $mail->Password = 'jayyadav@1234';
    $mail->Port = 587;                            // SMTP password
    $mail->SMTPSecure = 'tls';                            // 
    //Recipients
    $mail->setFrom('prachandk05@gmail.com', 'Mailer');
    $mail->addAddress('chandra.prakash_cs16@gla.ac.in', 'Joe User');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Finally you do it';
    $mail->Body    = 'Hello from <b>Moon4Light</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>