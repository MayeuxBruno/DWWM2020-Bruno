<?php

include"fonctionstableau.php";
$positif=$negatif=0;

do
{
    $nb=saisieEntierPhrase("Entrez le nombre de valeurs à entrer : ");
}while($nb <= 0);

$tableau=saisieTableau($nb);
$result=posNeg($tableau);

echo "il y a ".$result[0]." valeur(s) negative(s) et ".$result[1]." valeur(s) positive(s)";