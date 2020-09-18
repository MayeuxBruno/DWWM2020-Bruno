<?php

/**** Controle de la saisie d'un entien avec intitule ****/
/******    passé en paramètre par $phrase   **************/
function saisieEntierPhrase($phrase)
{
    do
    {
        do
        {
            $nombre=readline($phrase);
        }while(!is_numeric($nombre));
    }while(!is_integer($nombre*1));
    return $nombre;
}

/**** creation de tableau  ****** 
 *         avec la taille défine**/

function saisieTableau($taille)
{
    for($i=0;$i<$taille;$i++)
    {
        $table[]=saisieEntierPhrase("Entrez une valeur : ");
    }
    return $table;
}

/*** Calcule la somme de deux tableaux passés en paramètres ($table1 et $table2) 
 *** élément par élément et, retourne un tableau avec le résultat *********/

function addTableaux($table1,$table2)
{
    if(count($table1)>=count($table2)){
        $table3=$table1;
        $count=count($table2);
    }
    else
    {
        $table3=$table2;
        $count=count($table1);
    }
    for ($i=0;$i<$count;$i++)
    {
        $table3[$i]=$table1[$i]+$table2[$i];
    }
    return $table3;
}

 /***** Affichage de tableau  **
 *    avec une boucle foreach  */

function afficheTableau($table)
{
    echo "\n";
    foreach($table as $valeur)
    {
        echo $valeur."\t";
    }
    echo "\n";
}

echo "Saisie du tableau 1 \n";
$tableau1=saisieTableau(8);
echo "Saisie du tableau 2 \n";
$tableau2=saisieTableau(8);
$tableau3=addTableaux($tableau1,$tableau2);
afficheTableau($tableau1);
afficheTableau($tableau2);
afficheTableau($tableau3);
