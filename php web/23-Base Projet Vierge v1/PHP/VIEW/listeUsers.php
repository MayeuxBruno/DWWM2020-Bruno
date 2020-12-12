<?php
$tableau=UsersManager::getList();
echo'<div class="colonne">
     <div class="espacehor"></div>'; 
foreach($tableau as $unUtilisateur)
{
    echo '<div class="lingne">
            <div></div>
            <div class="bouton blanc">'.$unUtilisateur->getNomUser()." ".$unUtilisateur->getPrenomUser().'</div>
            <div>
                <a href="index.php?page=formUtilisateurs&mode=detail&id='.$unUtilisateur->getIdUser().'"><div class="bouton vert">Consulter</div></a>
                <a href="index.php?page=formUtilisateurs&mode=modif&id='.$unUtilisateur->getIdUser().'"><div class="bouton orange">Modifier</div></a>
                <a href="index.php?page=formUtilisateurs&mode=suppr&id='.$unUtilisateur->getIdUser().'"><div class="bouton rouge">Supprimer</div></a>
            </div>
             <div></div>
          </div>';
}
echo'</div>
     <div class="espacehor"></div>
     <div>
        <div></div>
        <a href="index.php?page=formUser&mode=ajout"><div class="bouton vertclair">Ajouter un Utilisateur</div></a>
        <div></div>
     </div>';
?>