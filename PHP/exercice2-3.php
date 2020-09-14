<?php
$prix=readline("Entrez le prix : ");
$nb=readline("Entrez le nombre d'articles : ");
$tva=readline("Entrez le taux de tva : ");
$tva=(($prix*$tva)/100);
$prix=($prix+$tva)*$nb;
echo"Le prix total est de ".$prix." Euros.";