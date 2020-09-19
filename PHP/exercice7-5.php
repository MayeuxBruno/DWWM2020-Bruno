<?php
include "fonctionstableau.php";

$dictionnaire=array("bani","bébé","bidon","bonnet","buvette",
                    "café","chiffre","cinéma","clé","corridor","cruche",
                    "curé","pantalon","pelouse","phare","pièce","poil","puce");

$mot=readline("Entrez le mot à rechercher dans le dictionnaire : ");
$isPres= rechercheDicho($mot,$dictionnaire);

if ($isPres==1)
{
    echo "Le mot se trouve dans le dictionnaire";
}
else
{
    echo "Le mot ne se trouve pas dans le dictionnaire";
}
