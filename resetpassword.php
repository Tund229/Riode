<?php 
    session_start();
    include 'config.php';
?>
<?php
  if(isset($_POST["reset_password"]) AND isset($_POST["c_reset_password"]) AND isset($_POST["reset_email"])){
      $password= htmlspecialchars($_POST["reset_password"]);
      $c_password= htmlspecialchars($_POST["c_reset_password"]);
      $reset_email = htmlspecialchars($_POST["reset_email"]);
      if($password == $c_password){
        $sql= "UPDATE users SET register_password=$password WHERE register_email='$reset_email' and verified= 1";
        $result=mysqli_query($conn, $sql);
        if($result){
            $sql="SELECT * FROM users WHERE register_email='$reset_email' AND register_password = '$password'";
            $result=mysqli_query($conn, $sql);
            if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["register_id"]=$row["register_id"];
            $_SESSION["register_name"]=$row["register_name"];
            $_SESSION["register_email"]=$row["register_email"];
            $_SESSION["register_password"]=$row["register_password"];
            header("location:index.php?register_id=".$_SESSION["register_id"]);
            }else{
              $erreur="Something wrong went!";
              header("location:reset-password.php?erreur=".$erreur);
            }
            
        }else{
          $erreur="Something wrong went!";
          header("location:reset-password.php?erreur=".$erreur);
        }  
      }else{
        $erreur="Password not matched";
        header("location:reset-password.php?erreur=".$erreur);
      }
  }



?>