<?php
session_start();
include 'config.php';
?>
<?php 
  if(isset($_POST["register_agree"])){
      $register_name= htmlspecialchars($_POST["register_name"]);
      $register_email= htmlspecialchars($_POST["register_email"]);
      $register_password=$_POST["register_password"];
      $c_register_password= $_POST["c_register_password"];
      if($register_password == $c_register_password){
        $sql="SELECT * FROM users WHERE register_email='$register_email'";
        $result=mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
            $sql = "INSERT INTO users(register_name, register_email, register_password)
            VALUE ('$register_name', '$register_email', '$register_password')";
            $result=mysqli_query($conn, $sql);
            if($result){
              $sql="SELECT * FROM users WHERE register_email='$register_email' AND register_password = '$register_password'";
              $result=mysqli_query($conn, $sql);
              if($result->num_rows > 0){
              $row = mysqli_fetch_assoc($result);
              $_SESSION["register_id"]=$row["register_id"];
              $_SESSION["register_name"]=$row["register_name"];
              $_SESSION["register_email"]=$row["register_email"];
              $_SESSION["register_password"]=$row["register_password"];
              header("location:index.php?register_id=".$_SESSION["register_id"]);
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