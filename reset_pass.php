<?php
    session_start();

    require_once('check_auth.php');
    require_once('connection_db.php');
    $id_users = $_GET['id'];
    $req = "UPDATE users SET reset_mdp='1' WHERE idusers=$id_users" ;
    $res = $con->query($req) ;
    header('location:dashboard.php')
?>