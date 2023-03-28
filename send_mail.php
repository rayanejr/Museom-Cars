<?php

    session_start();


    require_once('connection_db.php');



    if (isset( $_POST['fullname'] )  ) {


        $fullname = $_POST['fullname']; 
        $email = $_POST['email']; 
        $subject = $_POST['subject']; 
        $message = $_POST['message']; 

        // mysqli_query
        $req = $con->prepare('INSERT INTO `messages`(`fullname`, `email`, `subject`, `message`) VALUES (?,?,?,?)');
        $req->execute(array($fullname,$email,$subject,$message));

        header('Location:contact.php?success=Votre email a bien été envoyé.');
            
          

        
    }

?>