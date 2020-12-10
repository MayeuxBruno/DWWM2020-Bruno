<?php

require "fonctionstableau.php";

$positif=$negatif=0;

do
{
    $nb=saisieEntierPhrase("Entrez le nombre de valeurs à entrer : ");
}while($nb <= 0);

$tableau=saisieTableau($nb);

foreach ($tableau as $elt)
{
       if($elt<0)
       {
           $negatif++;
       }
       else
       {
           $positif++;
       }
}
echo "il y a ".$negatif." valeur(s) negative(s) et ".$positif." valeur(s) positive(s)";