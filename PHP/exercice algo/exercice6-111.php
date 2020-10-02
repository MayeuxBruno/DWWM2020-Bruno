<?php
require "fonctionstableau.php";

$schtroumpf=0;

// Saisie des 2 tableaux
echo "Saisie du tableau 1 : \n";
$tableau1=creTableau();
echo "Saisie du tableau 2 : \n";
$tableau2=creTableau();

// calcul du Schtroumpf
for($indTab2=0;$indTab2<count($tableau2);$indTab2++)
{
        for($indTab1=0;$indTab1<count($tableau1);$indTab1++)
        {
            $schtroumpf+=($tableau1[$indTab1]*$tableau2[$indTab2]);
        }
}    

echo "Le schtroumpf est de ".$schtroumpf."\n";