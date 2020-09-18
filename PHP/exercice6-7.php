<?php
include "fonctionstableau.php";

$tableau=saisieTableauPhrase(9,"Entrez une note : ");
echo "La moyenne des notes est de ".moyTableau($tableau);