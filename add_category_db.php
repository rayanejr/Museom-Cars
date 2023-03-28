<?php

    session_start();

    require_once('connection_db.php');

    if (isset( $_POST['category'] )  ) {


        $category = $_POST['category']; 

        // mysqli_query
        $req = $con->prepare('INSERT INTO `categories`(`label_category`) VALUES (?)');
        $req->execute(array($category));

        header('Location:dashboard.php');
        
    }

?>