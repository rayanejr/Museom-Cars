<?php

require_once('connection_db.php');


$id = $_GET['id'];
$likes = $_GET['likes'];


$likes++;


$likeREQ = $con->prepare('UPDATE `articles` SET  `likes`=? WHERE `id_article` = ?');
$likeREQ->execute(array($likes, $id));



header("Location:article.php?id=".$id);


?>