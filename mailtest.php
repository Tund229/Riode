<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

try {
    // configuration de mailtrap
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '9af1528613fa39';
    $mail->Password = '161a9563815fbf';


    $mail->setFrom('from@example.com', 'Mailer');  // mail de l'envoyeur
    $mail->addAddress('joe@example.net', 'Joe User');  // mail du recpeteur

    //Content
    $mail->isHTML(true);  //  pour être sur que le html sera interpreté
    $mail->Subject = 'Here is the subject'; // sujet du mail
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';  // contenu
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';  // contenu alternatif sans html

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    // code a executer en cas de problème
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}