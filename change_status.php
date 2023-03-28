<?php

    session_start();
    require_once('connection_db.php');
  
   //  p?intervention='.$data['idinterventions'].'&status=1" ><s

   $status = $_GET['status'];
   $id = $_GET['intervention'];


   $reqUpdate = $con->prepare('UPDATE `interventions` SET `status`= ?  WHERE `idinterventions` = ?');
   $reqUpdate->execute(array( $status,$id ));

   header('Location:interventions.php');

?>