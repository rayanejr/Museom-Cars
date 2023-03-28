<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creation de compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-5 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1>Creation de compte</h1>
                            <hr>

                            <form action="create_account.php" method="post" enctype="multipart/form-data">
                                
                            
                                <div class="form-group mb-3">
                                    <label for="">Nom prénom</label>
                                    <input require type="text" class="form-control" name="fullname">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">email</label>
                                    <input require type="text" class="form-control" name="email">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="">Avatar</label>
                                    <input require type="file" accept="image/*" class="form-control" name="photo">
                                </div>
                                
                                

                                <div class="form-group mb-3">
                                    <label for="">mot de passe</label>
                                    <input require type="password" class="form-control" name="password">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">confirmer mot de passe</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                                


                                <?php 
                                    if ( isset($_GET['message']) ) {
                                        echo '<div class="alert alert-danger">
                                            '.$_GET['message'].'
                                        </div>
                                        ';
                                    }
                                
                                ?>
  
                                

                                <div class="form-group">
                                   <button type="submit" class="btn btn-success">Creer votre compte</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>