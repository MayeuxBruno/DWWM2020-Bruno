<?php

function remplirTableau()
{
    for ($i = 0; $i <= 5; $i++)
    {
        for ($j = 0; $j <=5; $j++)
        {
            $t[$i][$j] = 0;
        }
    }
    return $t;
}

function afficheTableau($t)
{
    echo "\n";
    $nbCol = count($t[0]);
    // on prepare les séparateurs et le titre
    $ligneSuperieure = "";
    $ligneIntermediaire = "";
    $titre = "";
    for ($k = 1; $k <= $nbCol; $k++)
    {
        //on commence à 1 pour afficher les numeros des colonnes
        $titre .= "\t    " . $k;
        if ($k == $nbCol)
        {
            $ligneSuperieure .= "_______";
        }
        else
        {
            $ligneSuperieure .= "________";
        }
        $ligneIntermediaire .= "_______|";
    }
    //Affiche ligne par ligne
    for ($i = 0; $i < count($t); $i++)
    {
        if ($i == 0) //haut du tableau
        {
            //ligne supérieur du tableau
            echo "\t ".$ligneSuperieure."\n";
        }
        else //Centre du tableau
        {
            //ligne intermédiaire

            echo $ligneIntermediaire . "\n";
        }
        
        //affichage des élément du tableau
        for ($j = 0; $j < $nbCol; $j++)
        {
            echo "\t|   " . $t[$i][$j];
        }
        echo "\t|\n\t|";
    }
    //bas du tableau
    echo $ligneIntermediaire."\n";

}

$t=remplirTableau();
afficheTableau($t);