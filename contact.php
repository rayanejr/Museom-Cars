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
    <title>Contact</title>
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



        <?php $article = null;  if (isset($_GET['article'])) {
          $article = $_GET['article'];
        } ?>


      <?php include_once ('./components/navbar.php');?>


      <div class="container mt-5">
          <div class="row">
            <div class="col-sm-3">
            
            <?php include_once ('./components/side_menu.php');?>

            </div>


            <div class="col-sm-9">
                <h3>Contact</h3>


                <form action="send_mail.php" method="post">
                    <div class="form-group mb-3">
                        <label for="">Nom et prénom</label>
                        <input type="text" class="form-control" name="fullname">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Objet</label>
                        <input type="text" class="form-control" name="subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Message</label>
                        <textarea  class="form-control" name="message"></textarea>
                    </div>
                    <div class="form-group mb-3">
                       <button type="submit" class="btn btn-primary">Envoyé</button>
                    </div>


                    <?php
                        if (isset($_GET['success'])) {
                            echo '<div class="alert alert-success">'.$_GET['success'].'</div>';
                        }

                    ?>
                    
                    

                </form>
             
            

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