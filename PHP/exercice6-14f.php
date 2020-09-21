<?php

include "fonctionstableau.php";

$bonneNote=0;

$nbNotes=saisieEntierPhrase("Entrez le nombre de notes à saisir : ");
$tableau=saisieTableauPhrase($nbNotes,"Entrez une note : ");
$moyenne=array_sum($tableau)/count($tableau);

for ($i=0;$i<count($tableau);$i++)
{
    if ($tableau[$i]>$moyenne)
    {
        $bonneNote++;
    }
}
echo "Il y'a ".$bonneNote." au dessus de la moyenne de classe.";
