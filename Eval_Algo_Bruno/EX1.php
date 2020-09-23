<?php

function saisieNombrePhrase($phrase)
{
        do
        {
            $nombre=readline($phrase);
        }while(!is_numeric($nombre));
    return $nombre;
}

do 
{
    echo "\n\t CALCUL D'UN CERCLE\n\n";
    // vérifie que le rayon saisi est positif
    do
    {
        $rayon=saisieNombrePhrase("Quel est le rayon du cercle : ");
    }while($rayon<=0);
    
    // affichage de la circonférence et de la surface 
    echo "\nSa circonférence est de \t: ".(2*M_PI*$rayon)."\n";
    echo "Sa surface est de \t\t: ".M_PI*($rayon*$rayon)."\n\n";
    
    // demande à l'utilisateur pour faire un autre calcul et vérification de la saisie
    do
    {
         $autre=strtolower(readline("Voulez-vous faire un autre calcul (O/N) : "));
    }while(($autre!="o")&&($autre!="n"));
}while($autre=="o");

echo "\n Au revoir et à bientôt !\n";