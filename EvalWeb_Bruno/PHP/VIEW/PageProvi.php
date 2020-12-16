<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRole()==1)
{
   echo'<div class="espacehor"></div>';
   echo'<div>
        <div></div>
        <div class="colonne">
            <a href="index.php?page=listeEleves"><button>Gérer les éléves</a></button>
            <a href="index.php?page=listeEnseignants"><button>Gérer les enseignants</a></button>
            <a href="index.php?page=listeNotes"><button>Gérer les notes</a></button>
            <a href="index.php?page=listeMatieres"><button>Gérer les matières</a></button>
        </div>
        <div></div>
        </div>
        <div class="espacehor"></div>';
}
else{
    header("url=index.php?page=accueil");
}