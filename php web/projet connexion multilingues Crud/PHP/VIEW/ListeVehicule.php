<?php

//var_dump($_SESSION);
$vehicules=VehiculesManager::getList();

if ($_SESSION['utilisateur']->getRoleUser()==2)
{
    echo '<div class="demiespacehor"></div>';
    echo '<div class="center"><button>'.texte("ajouterVehicule").'</button></div>';
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
        echo '<div class="center"><button>'.texte("details").'</button></div>';
        if ($_SESSION['utilisateur']->getRoleUser()==2)
        {
            echo '<div class="center"><button>'.texte("modifier").'</button></div>';
            echo '<div class="center"><button>'.texte("supprimer").'</button></div>';
        }
        echo '</div>';
}
echo '</div>';
echo'<div></div>';
echo '</div>';