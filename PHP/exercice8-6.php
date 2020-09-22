<?php

include "fonctionstableau.php";

//Génère un tableau double aléatoire

for ($i=0;$i<13;$i++)
{
    for ($j=0;$j<9;$j++)
    {
        $tab[$i][$j]=rand(1,100);
    }
    
}

$min=$tab[0][0];
for ($i=0;$i<count($tab);$i++)
{
    for ($j=0;$j<count($tab[$i]);$j++)
    {
        if($tab[$i][$j]<$min)
        {
            $min=$tab[$i][$j];
        }
    }
}

lectureTableauDouble($tab);
echo "\nLa valeur minimale du tableau est ".$min."\n";
echo"\n";
