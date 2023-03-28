<?php


echo '
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">


    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
        
        
        <li class="nav-item">
        <a class="nav-link active" href="update_users_page.php">Modifier le Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">déconnexion</a>
        </li> 

      </ul>
    </div>



    <div>
      <div class="d-flex">
      <div><img src="'.$_SESSION['avatar'].'" style="width:60px;border-radius:50%;">
      </div>

      <div><p class="text-white">salut!, '.$_SESSION['fullname'].'</p></div>
      
      </div>
    </div>

  </div>
</nav>
';

?>