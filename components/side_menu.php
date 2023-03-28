<?php


$reqCategories = $con->prepare('SELECT * FROM `categories`');
$reqCategories->execute(array());

              

echo '
<ul class="list-group">';


    while ($data = $reqCategories->fetch()) {
        echo '<li class="list-group-item"> 

                    <p>
                    <strong>'.$data['label_category'].'</strong> <br>
                    <a href="index.php?article='.$data['id_category'].'">voir articles</a>
                    </p>
            </li>
        ';
    }

            

echo '
</ul>

';



?>
