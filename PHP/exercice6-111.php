<?php
include "fonctionstableau.php";

$schtroumpf=0;
echo "Saisie du tableau 1 : \n";
$tableau1=creTableau();
echo "Saisie du tableau 2 : \n";
$tableau2=creTableau();

for($i=0;$i<count($tableau2);$i++)
{
        for($j=0;$j<count($tableau1);$j++)
        {
            $schtroumpf+=($tableau1[$j]*$tableau2[$i]);
        }
}    
echo "Le schtroupf est de ".$schtroumpf;