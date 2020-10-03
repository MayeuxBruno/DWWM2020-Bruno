<?php
require "fonctionsTableauxDouble.php";

$tab1=remplirTableauAlea();
var_dump($tab1);
echo "\n";
echo count($tab1);
echo "\n";
echo count($tab1[0]);
echo "\n";
afficheTableau2Dim($tab1);
echo $tab1[1][3];

for ($i=0;$i<count($tab1);$i++)
{
     echo $tab1[$i][$i];
}