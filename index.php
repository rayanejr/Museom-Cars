<?php
    session_start();

    require_once('check_auth.php');
    require_once('connection_db.php');

    $req_reset = 'SELECT reset_mdp FROM users WHERE idusers='.$_SESSION['id'] ;
    $res_reset = $con->query($req_reset) ;
    
    while($dataR = $res_reset->fetch())
    {
      $reset_mdp = $dataR['reset_mdp'] ;
    }

    if($reset_mdp == 1)
    {
      $req_change = 'UPDATE users SET reset_mdp=0 WHERE idusers ='.$_SESSION['id']; 
      $res_change = $con->query($req_reset);
      header('Location:reset_pass_user.php');

    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
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
          exit(0);
        }

      ?>



        <?php $article = null;  if (isset($_GET['article'])) {
          $article = $_GET['article'];
        } ?>


      <?php include_once ('./components/navbar.php');?>

<hr>
      <div class="container mt-5">
          <div class="row">
                <div class="col-sm-12">

                <img src="ece.png" class="img-thumbnail" >
                    <!-- <img src="r.png"  class="w-100"/> -->

                    <h3 class="text-center mt-3">Voici notre musée, il est destiné à vendre les mini voitures de collection. Vous êtes les bienvenus pour découvrir et acheter nos minis voitures.</h3>


                </div>


          </div>
          <hr>

          
          <div class="row">
            <div class="col-sm-3">
            
            <?php include_once ('./components/side_menu.php');?>

            </div>


            <div class="col-sm-9">



              <h3>Liste de nos mini voitures:</h3>


              <div class="row">
              <?php
                $req = $article == null ? 'SELECT * FROM `articles`,categories WHERE articles.category_id = categories.id_category' : 'SELECT * FROM `articles`,categories WHERE articles.category_id = categories.id_category AND articles.category_id = '.$article;
              
                $reqArtciles = $con->prepare($req);

                $reqArtciles->execute(array());


                while ($data = $reqArtciles->fetch()) {
                  echo '
                  <div class="col-sm-4 mb-3">
                    <div class="card w-100">
                      <img src="'.$data['photo_article'].'" class="card-img-top w-100" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">'.$data['label_article'].'</h5>
                      
                        <a href="article.php?id='.$data['id_article'].'" class="btn btn-primary">more details</a>
                      </div>
                    </div>
                    
                  </div>
                  ';
                }


              
              ?>
              </div>


            </div>
          </div>
      </div>

        <hr>
      <div class="row">
                <div class="col-sm-12">

                  

                    <h3 class="text-center mt-3">Copyright .Ce site a éte réalisé par Rayane JERBI, Mathis Jankovic</h3>


                </div>


          </div>
          <hr>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>