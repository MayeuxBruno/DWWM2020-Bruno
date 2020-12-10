<?php
include "fonctionstableau.php";

$tableau=saisieTableauPhrase(9,"Entrez une note : ");
echo "La moyenne des notes est de ".array_sum($tableau)/count($tableau);