<?php
include 'config.php';
?>
<?php 
    if(isset($_POST["name_contact"]) and isset($_POST["mail_contact"]) 
    and isset($_POST["comment_contact"])) { 
        $contact_name = htmlspecialchars($_POST["name_contact"]);
        $contact_eamil = htmlspecialchars($_POST["mail_contact"]);
        $contact_comment = htmlspecialchars($_POST["comment_contact"]);
        $sql = "INSERT INTO contact_us(name_contact, mail_contact, comment_contact)
        VALUE ('$contact_name', '$contact_eamil', '$contact_comment')";
        $result=mysqli_query($conn, $sql);
        if($result){
            $send=$contact_name." "."votre comment a bien été envoyé !";
            header("location:contact-us.php?Commentsend=".$send);
        }else{
            header("location:contact-us.php");
        }   
    }
?> 
 