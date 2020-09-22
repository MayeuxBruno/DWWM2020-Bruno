<?php
require "fonctionstableau.php";

$longueur=saisieEntierPhrase("Quelle est la taille du tableau : ");
echo "Saisie du tableau 1 \n";
$tableau1=saisieTableau($longueur);
echo "Saisie du tableau 2 \n";
$tableau2=saisieTableau($longueur);
$tableau3=addTableaux($tableau1,$tableau2);
afficheTableau($tableau3);
