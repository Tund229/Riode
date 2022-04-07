<?php 
    include 'config.php';
    include 'msgneed.php'
?>
<?php 
if(isset($_POST["reset_email"])){
    $email= htmlspecialchars($_POST["reset_email"]);
    $code = uniqid();
    $sql="SELECT * FROM users WHERE verified= 1 AND register_email='$email'";
    $result=mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        try{
            $mail->setFrom('from@example.com', 'Mailer');  // mail de l'envoyeur
            $mail->addAddress('joe@example.net', 'Joe User');  // mail du recpeteur

            //Content
            $mail->isHTML(true);  //  pour être sur que le html sera interpreté
            $mail->Subject = 'Reset your password'; // sujet du mail
            $mail->Body    = '<a href="http://localhost/riode/reset-password.php?reset='.$code.'"> RESET</> ';  // contenu
            $mail->AltBody = ' This is the body in plain text for non-HTML mail clients';  // contenu alternatif sans html
        
            $mail->send();
            $erreur="Message has been sent! Verify your Email box";
            header("location:index.php?erreur=".$erreur);
          }catch (Exception $e){
            // code a executer en cas de problème
            $erreur="Something wrong went!";
            header("location:index.php?erreur=".$erreur);
          }

    }else{
        $erreur="Unable to reset your password!";
        header("location:index.php?erreur=".$erreur);
    }
}
?>
