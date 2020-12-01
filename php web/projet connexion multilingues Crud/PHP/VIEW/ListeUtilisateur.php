<?php

$utilisateurs=UsersManager::getList();
if (isset($_SESSION['utilisateur']))
{
    if ($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo '<div class="demiespacehor"></div>';
        echo '<div class="center"><button><a href="index.php?codePage=formutilisateur&mode=add">'.texte("ajutilisateur").'</a></button></div>';
        echo '<div class="demiespacehor"></div>';
    }
    else{
        echo '<div class="espacehor"></div>';
    }
    echo'<div>';
    echo'<div></div>';
    echo '<div class="colonne">';
    foreach ($utilisateurs as $unutilisateur)
    {
            echo'<div class="bordure fondform">';
            echo '<div class="center">'.$unutilisateur->getNomUser()." - ".$unutilisateur->getPrenomUser().'</div>';
            echo '<div class="center"><button><a href="index.php?codePage=formutilisateur&mode=cons&id='.$unutilisateur->getIdUser().'">'.texte("details").'</a></button></div>';
            if ($_SESSION['utilisateur']->getRoleUser()==2)
            {
                echo '<div class="center"><button><a href="index.php?codePage=formutilisateur&mode=upd&id='.$unutilisateur->getIdUser().'">'.texte("modifier").'</a></button></div>';
                echo '<div class="center"><button><a href="index.php?codePage=formutilisateur&mode=del&id='.$unutilisateur->getIdUser().'">'.texte("supprimer").'</a></button></div>';
            }
            echo '</div>';
    }
    echo '</div>';
    echo'<div></div>';
    echo '</div>';
    echo '<div class="demiespacehor"></div>';
    echo '<div class="center"><button><a href="index.php?codePage=accueil">'.texte("retour").'</a></button></div>';
}