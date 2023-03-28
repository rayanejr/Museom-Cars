<?php



require_once('connection_db.php');


$id = $_GET['id'];
$quantite = $_GET['quantite'];


$quantite--;


$likeREQ = $con->prepare('UPDATE `articles` SET  `quantite`=? WHERE `id_article` = ?');
$likeREQ->execute(array($quantite, $id));



header("Location:article.php?id=".$id);


?>