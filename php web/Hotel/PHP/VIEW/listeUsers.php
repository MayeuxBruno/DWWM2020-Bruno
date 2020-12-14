<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRoleUser()==2)
{
     $tableau=UsersManager::getList();
     echo'<div class="colonne">
          <div class="espacehor"></div>'; 
          echo '<div class="lingne">
          <div></div>
          <div class="celule entete justify">Nom</div>
          <div class="celule entete justify">Prénom</div>
          <div class="celule entete justify"></div>
          <div></div>     
          </div>';
     foreach($tableau as $unUtilisateur)
     {
     echo '<div class="lingne">
               <div></div>
               <div class="celule">'.$unUtilisateur->getNomUser().'</div>
               <div class="celule">'.$unUtilisateur->getPrenomUser().'</div>
               <div class="celule space">
                    <a href="index.php?page=formUtilisateurs&mode=detail&id='.$unUtilisateur->getIdUser().'"><button>'.texte("consulter").'</button></a>
                    <a href="index.php?page=formUtilisateurs&mode=modif&id='.$unUtilisateur->getIdUser().'"><button>'.texte("modifier").'</button></a>
                    <a href="index.php?page=formUtilisateurs&mode=suppr&id='.$unUtilisateur->getIdUser().'"><button>'.texte("supprimer").'</button></a>
               </div>
               <div></div>
               </div>';
     }
     echo'</div>
          <div class="espacehor"></div>
          <div>
          <div class="space"></div>
          <a href="index.php?page=formUtilisateurs&mode=ajout"><button>'.texte("ajouter").'</button></a>
          <div></div>
          </div>';
}
else
{
     echo'<div class="espacehor"></div>';
     echo '<div class="justify"><h2 class="alert">Vous n\'avez pas les droit nécessaires pour accéder à cette page</h2></div>';
     header("refresh:3;url=index.php?page=accueil");
}
?>