<?php

    session_start();


    require_once('connection_db.php');



    if (isset( $_POST['email'] ) and isset( $_POST['password'] )  ) {


        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $password = sha1($_POST['password']);



        // mysqli_query
        $req = $con->prepare('SELECT `idusers`, `fullname`, `email`, `role` FROM `users` WHERE `email` = ? ');
        $req->execute(array($email));



        $res = $req->rowCount();

        if ( $res != 0 ) {
            header('Location:login.php?message=this email is already in use&error=ok');
            
            
        }else{

            if ( $_POST['confirm_password'] != $_POST['password'] ) {
                header('Location:login.php?message=password not matching&error=ok');
            
            }else{
                $reqInsert = $con->prepare('INSERT INTO `users`( `fullname`, `email`, `password`, `role`,`reset_mdp`) VALUES (?,?,?,?,?) ');
                $reqInsert->execute(array( $fullname, $email, $password ,'ROLE_USER',0));
    
    
                // hundle photo
    
                $photo = $_FILES['photo'];
    
                $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
    
    
                
    
                $tmp_name = $_FILES["photo"]["tmp_name"];
                
    
                $idu=uniqid();
    
                move_uploaded_file($tmp_name, './users/'.$idu.'.'.$ext);
                 
    
                
    
    
                $reqInsert = $con->prepare('UPDATE `users` SET  `avatar`=? WHERE `email` = ? ');
                $reqInsert->execute(array( './users/'.$idu.'.'.$ext, $email )); 
    
                header('Location:login.php');
            }

       
        }
        
    }

?>