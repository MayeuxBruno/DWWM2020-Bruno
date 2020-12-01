<?php

$utilisateurs=UsersManager::getList();
if (isset($_SESSION['utilisateur']))
{
    if ($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo '<div class="demiespacehor"></div>';
        echo '<div class="center"><button><a href="index.php?codePage=formvehicule&mode=add">'.texte("ajouterVehicule").'</a></button></div>';
        echo '<div class="demiespacehor"></div>';
    }
    else{
        echo '<div class="espacehor"></div>';
    }
    echo'<div>';
    echo'<div></div>';
    echo '<div class="colonne">';
    foreach ($vehicules as $unvehicule)
    {
            echo'<div>';
            echo '<div class="center">'.$unvehicule->getNoparc().'</div>';
            echo '<div class="center"><button><a href="index.php?codePage=formvehicule&mode=cons&id='.$unvehicule->getIdVehicule().'">'.texte("details").'</a></button></div>';
            if ($_SESSION['utilisateur']->getRoleUser()==2)
            {
                echo '<div class="center"><button><a href="index.php?codePage=formvehicule&mode=upd&id='.$unvehicule->getIdVehicule().'">'.texte("modifier").'</a></button></div>';
                echo '<div class="center"><button><a href="index.php?codePage=formvehicule&mode=del&id='.$unvehicule->getIdVehicule().'">'.texte("supprimer").'</a></button></div>';
            }
            echo '</div>';
    }
    echo '</div>';
    echo'<div></div>';
    echo '</div>';
    echo '<div class="demiespacehor"></div>';
    echo '<div class="center"><button><a href="index.php?codePage=accueil">'.texte("retour").'</a></button></div>';
}