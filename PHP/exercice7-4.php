<?php
include "fonctionstableau.php";

$tableau=creTableau();
afficheTableau($tableau);
$valeur=saisieEntierPhrase("Entrez la valeur à supprimer : ");
$tableau=supElementTableau($tableau,$valeur);
afficheTableau($tableau);