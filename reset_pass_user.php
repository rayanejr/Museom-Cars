<?php
    session_start();

    require_once('check_auth.php');
    require_once('connection_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Reset MDP</title>
</head>
<body>
    Votre mot de passe a été réinitialisé par un administrateur, veuillez en entrer un nouveau <br> <br>
    <form action="" method="post">
        Mot de passe : <br>
        <input type="password" name="pass"> <br> <br>
        Comfirmer le mot de passe <br> 
        <input type="password" name="confirm_pass"> <br>  <br>
        <input type="submit" value="confirmer" name="bout">
    </form>

    <?php

        if(isset($_POST['bout']))
        {
            $password = $_POST['pass'] ;
            $comfirm_password = $_POST['confirm_pass'] ;
            
            #Rentre dans le else mais pas dans le if on a pas trouvé pourquoi
            if($password == $comfirm_password)
            {
                $req = 'UPDATE users SET password='.$password.' WHERE idusers='.$_SESSION['id'] ;
                $res = $con->query($req) ;
                echo $req ;
                header("location:index.php");
            }
            else
            {
                echo "<br>ERREUR : Les mots de passe ne correspondent pas <br>Veuilez réessayer" ;
            }
        }

    ?>        
</body>
</html>