<?php
include "fonctionstableau.php";
$tableau=creTableau();
$max=maxTableau($tableau);
echo "La valeur maximale du tableau est de ".$max[0]." située à la position ".$max[1];
