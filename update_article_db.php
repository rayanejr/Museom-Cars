<?php

    session_start();


    require_once('connection_db.php');
 


    $id = $_POST['id'];
    $label = $_POST['label']; 
    $price = $_POST['price']; 
    $descreption = $_POST['descreption'];  
    $categoryID = $_POST['category_id'];  
    $quantite = $_POST['quantite'];





    $photo = $_FILES['photo'];
    
    $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
    $tmp_name = $_FILES["photo"]["tmp_name"];
    
    $photoID = uniqid();

    move_uploaded_file($tmp_name, './articles/'.$photoID.'.'.$ext);
     

    


    $reqInsert = $con->prepare('UPDATE `articles` SET `label_article`=?,`photo_article`=?,`decription_article`=?,`price`=?,`category_id`=?,`quantite`=? WHERE `id_article` = ?');
    $reqInsert->execute(array( $label, './articles/'.$photoID.'.'.$ext, $descreption,$price, $categoryID , $id,$quantite));


    header('Location:dashboard.php');
        
          
 

?>