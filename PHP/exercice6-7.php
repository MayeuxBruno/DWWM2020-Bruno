<?php
/*$total=0;

for($i=0;$i<9;$i++)
{
    do
    {
        $note=readline("Entrez la note numéro ".($i+1)." : ");
    }
    while(!is_numeric($note));
    $total+=$note;
    $tab[$i]=$note;
}

echo"Le tableau de notes est : '".implode($tab,"','")."'\n";
echo"La moyenne des notes est : ".($total/9);*/

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

/***** Calcule la moyenne d'un   **
 *      tableau d'entiers          */
function moyTableau($table)
{
   $moyenne=0;
   foreach($table as $valeur)
   {
        $moyenne=$moyenne+$valeur;
   } 
   $moyenne=$moyenne/(count($table));
   return $moyenne;
}

/***** Affichage de tableau  **
 *    avec une boucle foreach  */

function afficheTableau($table)
{
    foreach($table as $valeur)
    {
        echo $valeur."\t";
    }
    echo "\n";
}

$tableau=saisieTableau(9);
afficheTableau($tableau);
echo "La moyenne des notes est de ".moyTableau($tableau);