<?php
include "fonctionstableau.php";

echo "Saisie du tableau 1 \n";
$tableau1=saisieTableau(8);
echo "Saisie du tableau 2 \n";
$tableau2=saisieTableau(8);
$tableau3=addTableaux($tableau1,$tableau2);
afficheTableau($tableau3);
