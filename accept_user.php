<?php


session_start();
require_once('connection_db.php');

//  p?intervention='.$data['idinterventions'].'&status=1" ><s

$id = $_GET['id'];


$reqUpdate = $con->prepare('UPDATE `users` SET `status`=1 WHERE `idusers` = ?');
$reqUpdate->execute(array( $id ));

header('Location:dashboard.php');





?>