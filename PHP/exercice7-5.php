<?php
require "fonctionstableau.php";
$trouve=$debut=0;
$dico=array("bani","beur","bidon","bonnet","buvette",
                    "café","chiffre","cinéma","clé","corridor","cruche",
                    "curé","pantalon","pelouse","phare","pièce","poil","puce","wagon");

$mot=readline("Entrez le mot à rechercher dans le dictionnaire : ");

$fin=count($dico)-1;

while (($trouve==0) && ($debut<= $fin))
{
    $milieu=intdiv($debut+$fin,2);
    if ($dico[$milieu]==$mot)
    {
        $trouve=1;
    }
    else
    {
        if ($mot<$dico[$milieu])
        {
            $fin=$milieu-1;
        }
        else
        {    
            $debut=$milieu+1;
        }
    }
}

if ($trouve==1)
{
    echo "Le mot se trouve dans le dictionnaire";
}
else
{
    echo "Le mot ne se trouve pas dans le dictionnaire";
}
