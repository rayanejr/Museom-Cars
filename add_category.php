<?php
    session_start();


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout d'une catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-5 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1>Ajouter une categorie</h1>

                            <form action="add_category_db.php" method="post">
                              
                            
                                <div class="form-group mb-3">
                                    <label for="">Label</label>
                                    <input require type="text" class="form-control" name="category">
                                </div>
                      
                         
                                

                                <div class="form-group">
                                   <button type="submit" class="btn btn-success">Ajouter</button>
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