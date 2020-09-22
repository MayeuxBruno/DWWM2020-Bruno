<?php
require "fonctionstableau.php";

$tableau=creTableau();
afficheTableau($tableau);
$valeur=saisieEntierPhrase("Entrez la valeur à supprimer : ");
$index=array_search($valeur,$tableau);
$tableaudeb=array_slice($tableau,0,$index);
$tableauend=array_slice($tableau,$index+1,count($tableau)-1);
$tableau=array_merge($tableaudeb,$tableauend);
afficheTableau($tableau);