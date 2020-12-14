<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRoleUser()==2)
{
     $tableau=UsersManager::getList();
     echo'<div class="colonne">
          <div class="espacehor"></div>'; 
     foreach($tableau as $unUtilisateur)
     {
     echo '<div class="lingne">
               <div></div>
               <div class="bouton blanc">'.$unUtilisateur->getNomUser()." ".$unUtilisateur->getPrenomUser().'</div>
               <div>
                    <a href="index.php?page=formUtilisateurs&mode=detail&id='.$unUtilisateur->getIdUser().'"><div class="bouton vert">'.texte("consulter").'</div></a>
                    <a href="index.php?page=formUtilisateurs&mode=modif&id='.$unUtilisateur->getIdUser().'"><div class="bouton orange">'.texte("modifier").'</div></a>
                    <a href="index.php?page=formUtilisateurs&mode=suppr&id='.$unUtilisateur->getIdUser().'"><div class="bouton alert">'.texte("supprimer").'</div></a>
               </div>
               <div></div>
               </div>';
     }
     echo'</div>
          <div class="espacehor"></div>
          <div>
          <div></div>
          <a href="index.php?page=formUtilisateurs&mode=ajout"><div class="bouton vertclair">'.texte("AjoutUtilisateur").'</div></a>
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