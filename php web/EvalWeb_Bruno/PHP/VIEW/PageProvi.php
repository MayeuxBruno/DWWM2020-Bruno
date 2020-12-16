<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRole()==1)
{
   echo'<div claas="espace"></div>';
   echo'<div>
        <div></div>
        <div class="colonne">
            <button>Gérer les éléves</button>
            <button>Gérer les enseignants</button>
            <button>Gérer les notes</button>
            <button>Gérer les matières</button>
        </div>
        <div></div>';
}
else{
    header("url=index.php?page=accueil");
}