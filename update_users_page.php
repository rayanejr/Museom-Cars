<?php
    session_start();
    require_once('connection_db.php');

    $confirm = 0 ;
    
    $id = $_SESSION['id'];

    $req = "SELECT * FROM users WHERE idusers = $id " ;
                
    $req_user=$con->query($req);

    $user = $req_user->fetch() ;
 
    include_once ('./components/navbar.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier le compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <form action="update_users_db.php" method="post" enctype="multipart/form-data">
                                    
                                

            <div class="form-group mb-3">
                <label for="">Email</label>
                <input require type="text" class="form-control" name="email" value="<?php echo $user['email']?>" readonly>
            </div>

            <input type="hidden" name="idusers" value="<?php echo $user['idusers']?>">
            
            <div class="form-group mb-3">
                <label for="">Nom et prénom</label>
                <input require type="text" class="form-control" name="fullname" value="<?php echo $user['fullname']?>" required>
            </div> 

            <div class="form-group mb-3"> 
                <label for="">Avatar</label>
                <input require type="file" accept="image/*" class="form-control" name="avatar" value="<?php echo $user['avatar']?>" >
            </div>
                                                            
            <div class="form-group mb-3">
                <label for="">Mot de passe</label>
                <input require type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group mb-3">
                <label for="">Confirmer le mot de passe</label>
                <input type="password" class="form-control" name="confirm_password" >
            </div>

            <div class="form-group mb-3">
                <label for="">Ajouter/Modifier la note du site</label> &nbsp
                <input type="number" name="note" min="0" max="10" value="<?php echo $user['note'] ?>"> &nbsp/10 <br>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success" value="bout">Comfirmer la modification</button>
            </div>
                                                
        </form>

    </body>
</html>
<?php
