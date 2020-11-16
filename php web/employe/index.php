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
            <div class="nom">'.$e[$i]->getNom().' 
            '.$e[$i]->getPrenom().'</div></a>
        </div>';
}
echo'<div>';
/*
echo'<div class="colonne">';
$compteur=0;
for($i=0;$i<count($e);$i++)
{
    echo'<div class="employe">
        <a href="detail.php?id='.$e[$i]->getIdEmploye().'">
        <div class="cache">'.$e[$i]->getIdEmploye().'</div>
            <div class="nom">'.$e[$i]->getNom().' 
            '.$e[$i]->getPrenom().'</div></a>
        </div>';
        $compteur++;
        if ($compteur==3)
        {
            echo'</div>
                <div class="ligne">';
            $compteur=0;
        }
}
echo'<div>'; */

?>