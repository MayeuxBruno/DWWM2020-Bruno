<?php

include"fonctionstableau.php";
$positif=$negatif=0;

do
{
    $nb=saisieEntierPhrase("Entrez le nombre de valeurs à entrer : ");
}while($nb <= 0);

$tableau=saisieTableau($nb);

for($i=0;$i<count($tableau);$i++)
{
       if($tableau[$i]<0)
       {
           $negatif++;
       }
       if($tableau[$i]>=0)
       {
           $positif++;
       }
}

echo "il y a ".$negatif." valeur(s) negative(s) et ".$positif." valeur(s) positive(s)";