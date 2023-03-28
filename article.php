<?php
    session_start();

    require_once('check_auth.php');


    require_once('connection_db.php');
 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    

        
      <?php
        if ($_SESSION['status'] == 0) {
          echo '
          <div class="container mt-5">
            <div class="alert alert-danger">
              Thank you for your registration, wait for the system admin approval. <br/>

              <a href="logout.php">Logout</a>
            </div>
          </div>
          
          ';
        }

      ?>



        <?php $article = null;  if ($_GET['id']) {
          $article = $_GET['id'];
        } ?>


      <?php include_once ('./components/navbar.php');?>


      <div class="container mt-5">
          <div class="row">
            <div class="col-sm-3">
            
            <?php include_once ('./components/side_menu.php');?>

            </div>


            <div class="col-sm-9"> 

              <div class="row">
                <?php
                    $req = 'SELECT * FROM `articles`,categories WHERE articles.category_id = categories.id_category AND articles.id_article = '.$article;
                
                    $reqArtciles = $con->prepare($req);

                    $reqArtciles->execute(array());


                    while ($data = $reqArtciles->fetch()) {
                    echo '
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                <h1>'.$data['label_article'].'</h1>
                                <h3>'.$data['price'].'$</h3>
                                    


                                    
                                    <p class="text-muted">'.$data['createdAt'].'</p>
                                </div>



                                <div>
                                    <p>'.$data['likes'].' Likes</p>
                                </div>
                            
                            </div>
                            <img src="'.$data['photo_article'].'" class="w-100" alt="">
                        </div>
                    </div>


                    <div class="card mb-3">
                        <div class="card-body"> 
                         <p class="text-muted">'.$data['decription_article'].'</p>
                         <p>Quantité :'.$data['quantite'].'</p>
                        </div>
                    </div>


                    <div class="card mb-5">
                        <div class="card-body">

                        <a href="like_article.php?id='.$data['id_article'].'&likes='.$data['likes'].'" class="btn btn-primary" style="width: 250px"> Likes</a>
                       
                        <a class="btn btn-success" href="buy_article.php?id='.$data['id_article'].'" style="width: 250px">Buy</a>
                       

                        </div>

                    </div>


                    
                    ';


                    
                    }


                
                ?>
              </div>


              

            </div>
          </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>