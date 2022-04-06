<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';
     // configuration de mailtrap
     $mail = new PHPMailer();
     $mail->isSMTP();
     $mail->Host = 'smtp.mailtrap.io';
     $mail->SMTPAuth = true;
     $mail->Port = 2525;
     $mail->Username = '9af1528613fa39';
     $mail->Password = '161a9563815fbf';
?>