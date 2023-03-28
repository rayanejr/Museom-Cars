<?php

    session_start();


    require_once('connection_db.php');
 
    if(isset($_POST["bout"]))
    {
        if($_POST['confirm_password'] != $_POST['password'])
        {
            echo "Les mots de passe ne correspondent pas ! <br> Veuillez réessayer" ;
        }
        
    }

    $id_users = $_POST['idusers'];
    $fullname = $_POST['fullname']; 
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $note = $_POST['note'] ;  
    
    $avatar = $_FILES['avatar'];
    
    $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
    $tmp_name = $_FILES["avatar"]["tmp_name"];
    
    $photoID = uniqid();

    move_uploaded_file($tmp_name, 'users/'.$photoID.'.'.$ext);

    $req = "UPDATE users SET fullname=$fullname, email=$email, password=$password, avatar=/users/$photoID.$ext WHERE idusers=$id_users" ;
    $res = $con->query($req);
    $_SESSION['fullname'] = $fullname ;
    #$req = $con->prepare('UPDATE `users` SET `fullname`=?,`avatar`=?,`password`=?,`email`=?,`note`=? WHERE `idusers` = ?');
    #$req->execute(array( $fullname, './articles/'.$photoID.'.'.$ext, $password,$email, $note , $id_users));
    #echo $req ;
    

    header('Location:index.php');
        

?>