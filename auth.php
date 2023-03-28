<?php

    session_start();
    
    require_once('connection_db.php');

    if (isset($_POST['email']) and isset($_POST['password'])  ) 
    {

        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        // mysqli_query
        $req = $con->prepare('SELECT * FROM `users` WHERE `email` = ? AND `password` = ?');
        $req->execute(array($email,$password));

        $res = $req->rowCount();
        
        if ($res == 0) 
        {
            header('Location:login.php?message=Mot de passe ou email incorrecte&error=ok');
        }
        else
        {
            $data = $req->fetch(); 
            $_SESSION['id'] = $data['idusers'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['fullname'] = $data['fullname'];
            $_SESSION['avatar'] = $data['avatar'];
          
            
            
            if ($data['role'] == 'ROLE_USER') 
            {
                header('Location:index.php');
            }
            else if($data['role'] == 'ROLE_ADMIN')
            {
                header('Location:dashboard.php');
            }
        }
          
    }

?>