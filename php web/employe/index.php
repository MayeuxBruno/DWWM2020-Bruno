<?php

include "head.php";
include "listeEmploye.php";
include "header.php";



echo'<div class="colonne">';
$compteur=0;
for($i=0;$i<count($e);$i++)
{
    echo'<div class="employe">
        <a href="detail.php?id='.$e[$i]->getIdEmploye().'">
        <div class="cache">'.$e[$i]->getIdEmploye().'</div>
            <div class="cellule agence">'.$e[$i]->getAgence()->getNom().'</div>
            <div class="cellule nom">'.$e[$i]->getNom().'</div>
            <div class="cellule prenom">'.$e[$i]->getPrenom().'</div></a>
    </div>';
}
echo'<div>';

?>