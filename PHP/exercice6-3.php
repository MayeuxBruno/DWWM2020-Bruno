<?php
/*for($i=0;$i<9;$i++)
{
    do
    {
        $note=readline("Entrez la note numéro ".($i+1)." : ");
    }while(!is_numeric($note));
    $tab[$i]=$note;
}

echo "Le tableau de note est : '".implode($tab,"','")."'";*/
 /**** creation de tableau  ****** 
 *         avec la taille défine**/

function saisieTableau($taille)
{
    for($i=0;$i<$taille;$i++)
    {
        do
        {
           do{
               $valeur=readline("Entrez une valeur : ");
           }while(!is_numeric($valeur));
        }while(!is_int($valeur*1));
        $table[$i]=$valeur;
    }
    return $table;
}
/***** Affichage de tableau  **
 *    avec une boucle foreach  */

function afficheTableau($table)
{
    foreach($table as $valeur)
    {
        echo $valeur."\t";
    }
}

$tableau=saisieTableau(9);
afficheTableau($tableau);