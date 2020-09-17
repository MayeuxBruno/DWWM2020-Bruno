<?php

/**** Controle de la saisie d'un entien positif avec intitule ****/
function saisieEntierPhrase($phrase)
{
    do
    {
        do
        {
            $nombre=readline($phrase);
        }while(!is_numeric($nombre));
    }while((!is_integer($nombre*1))||($nombre<=0));
    return $nombre;
}

/***** creation de tableau  *****
 * avec la taille non définie ****/

 function creTableau()
 {
     $i=0;
     do
     {
         do{
             do{
                $valeur=readline("Entrez une valeur : ");
             }while(!is_numeric($valeur));
         }while(!is_int($valeur*1));
         $table[$i]=$valeur;
         $i++;
    }while($valeur!=0);
    unset($table[$i-1]); // Supprime la valeur 0 (arret de saisie)
    return $table;
     
 }

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
 *     avec une boucle for    **/

 function lectureTableau($table)
 {  
     echo "/n";
     for($i=0;$i<count($table);$i++)
     {
         echo $table[$i]."\t";
     }
     echo "\n";
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

 /***** Calcule la moyenne d'un   **
 *      tableau d'entiers          */
 function moyTableau($table)
 {
    $moyenne=0;
    foreach($table as $valeur)
    {
         $moyenne=$moyenne+$valeur;
    } 
    $moyenne=$moyenne/count($table);
    return $moyenne;
 }

 $tableau=creTableau();
 lectureTableau($tableau);
 echo moyTableau($tableau);