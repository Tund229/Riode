<?php
session_start();
include 'config.php';
if(isset($_POST['remember']) or !isset($_POST["remember"])) {
   $email_connect = htmlspecialchars($_POST['connect_email']);
   $password_connect =$_POST['connect_password'];
   if(!empty($email_connect) AND !empty($password_connect)) {
    $sql="SELECT * FROM users WHERE register_email='$email_connect' AND register_password = '$password_connect'";
    $result=mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["register_id"]=$row["register_id"];
        $_SESSION["register_name"]=$row["register_name"];
        $_SESSION["register_email"]=$row["register_email"];
        $_SESSION["register_password"]=$row["register_password"];
        header("location:index.php?register_id=".$_SESSION["register_id"]);
    }else{
        $erreur = "Mauvais mail ou mot de passe !";
        header("location:index.php?erreur=".$erreur);
    }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
      header("location:index.php?erreur=".$erreur);
   }
}
?>