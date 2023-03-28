<?php
    session_start();
    require_once('connection_db.php');

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-5 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1>Ajouter un article</h1>
                            
                            <form action="add_article_db.php" method="post" enctype="multipart/form-data">
                                
                            
                                <div class="form-group mb-3">
                                    <label for="">Label</label>
                                    <input require type="text" class="form-control" name="label">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="">Prix</label>
                                    <input require type="number" class="form-control" name="price" min="0">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Quantité</label>
                                    <input require type="number" class="form-control" name="quantite" min="0">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="">Photo</label>
                                    <input require type="file" class="form-control" name="photo">
                                </div>
                                
                                
                                <div class="form-group mb-3">
                                    <label for="">Descreption</label>
                                    <textarea require class="form-control" name="descreption"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Categorie</label>
                                    <select require class="form-control" name="category_id">
                                    <?php

                                            $req = 'SELECT * FROM categories' ;
                                            $reqCAT = $con->prepare($req);

                                            $reqCAT->execute(array());


                                            while ($data = $reqCAT->fetch()) {
                                            echo  '<option value="'.$data['id_category'].'">'.$data['label_category'].'</option>';
                                            }

?>

                                    </select>
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