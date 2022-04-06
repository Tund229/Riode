<?php
session_start();
include 'config.php';
include 'msgneed.php'
?>
<?php 
  if(isset($_POST["register_agree"])){
      $register_name= htmlspecialchars($_POST["register_name"]);
      $register_email= htmlspecialchars($_POST["register_email"]);
      $register_password=$_POST["register_password"];
      $c_register_password= $_POST["c_register_password"];
      $code = uniqid();
      if($register_password == $c_register_password){
        $sql="SELECT * FROM users WHERE register_email='$register_email'";
        $result=mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
            $sql = "INSERT INTO users(register_name, register_email, register_password, code)
            VALUE ('$register_name', '$register_email', '$register_password','$code')";
            $result=mysqli_query($conn, $sql);
            if($result){
              try{
                $mail->setFrom('from@example.com', 'Mailer');  // mail de l'envoyeur
                $mail->addAddress('joe@example.net', 'Joe User');  // mail du recpeteur
    
                //Content
                $mail->isHTML(true);  //  pour être sur que le html sera interpreté
                $mail->Subject = 'Ceci est votre mail de confirmation'; // sujet du mail
                $mail->Body    = '<a href="http://localhost/riode/index.php?verify='.$code.'">Confirmer</> ';  // contenu
                $mail->AltBody = ' This is the body in plain text for non-HTML mail clients';  // contenu alternatif sans html
            
                $mail->send();
                $erreur="Message has been sent! Verify your Email box";
                header("location:index.php?erreur=".$erreur);
              }catch (Exception $e) {
                // code a executer en cas de problème
                $erreur="Something wrong went!";
                header("location:index.php?erreur=".$erreur);
              }
            }else{
                $erreur="Something wrong went!";
                header("location:index.php?erreur=".$erreur);
            }

        }else{
            $erreur="Email already exits!";
            header("location:index.php?erreur=".$erreur);
        }

      }else{
        $erreur ="Password not matched!";
        header("location:index.php?erreur=".$erreur);
      }
      
  }else{
      $erreur="Please agree to the privacy policy!";
      header("location:index.php?erreur=".$erreur);
  }
?>