<?php
include "fonctionstableau.php";

/*** Fonction qui calcul le schroupf ****/
function schtroumpf($table1,$table2)
{
    $schtroupf=0;
    for($i=0;$i<count($table2);$i++)
    {
        for($j=0;$j<count($table1);$j++)
        {
            $schtroupf+=($table1[$j]*$table2[$i]);
        }
    }
    return $schtroupf;
}

echo "Saisie du tableau 1 : \n";
$tableau1=creTableau();
echo "Saisie du tableau 2 : \n";
$tableau2=creTableau();
echo "Le schtroupf est de ".schtroumpf($tableau1,$tableau2);