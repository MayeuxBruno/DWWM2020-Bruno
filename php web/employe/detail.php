<?php

include "head.php";
include "header.php";
include "listeEmploye.php";

$idRecherche = $_GET['id'];

/*foreach ($e as $employe)
{
    if($employe->getIdEmploye()==$idRecherche)
    {
        echo'<div class="ligne">';

        echo'<div class="personne colonne">
        <div class="nom">'.$employe->getNom().' '.
        $employe->getPrenom().'</div>
        <div class="embauche">Embauche le : '.$employe->getDateEmbauche()->format('d-m-Y').'</div>
        <div class="service">'.$employe->getService().'</div>
        </div>';

        echo '</div>';
    }
}*/
foreach ($e as $employe)
{
    if($employe->getIdEmploye()==$idRecherche)
    {
        echo'<h2>'.$employe->getNom().' '.$employe->getPrenom().'</h2>';
        echo '<div class="information">
              <ul>
                <li> Embauché le :'..$employe->getDateEmbauche()->format('d-m-Y').'</li>
                <li
        <div class="service">'.$employe->getService().'</div>
        </div>';

        echo '</div>';
    }
}
echo '<a href="index.php">Retour</a>';


include "footer.php";