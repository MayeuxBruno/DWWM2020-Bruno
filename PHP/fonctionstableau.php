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

/***** creation de tableau  *****
 * avec la taille non définie ****/

 function creTableau()
 {  
     do
     {
        $valeur=saisieEntierPhrase("Entrez une valeur : ");
        if ($valeur!=0)
        {
            $table[]=$valeur;
        }
     }while($valeur!=0);
    return $table;
     
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

 /***** Affichage de tableau  **
 *     avec une boucle for    **/

 function lectureTableau($table)
 {  
     echo "\n";
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

 /*** Retourne le nombre d'éléments négatives et positives *
 *** sous forme d'un tableau ( avec les veleur négatives à l'indice0
 *** et les valeurs positives à l'indice 1 ), d'un tableau entré par $ table*/

 function posNeg($table)
 {
     $pos=array(0,0);
     for($i=0;$i<count($table);$i++)
     {
            if($table[$i]<0)
            {
                $pos[0]++;
            }
            if($table[$i]>0)
            {
                $pos[1]++;
            }
     }
     return $pos;
 }

 $tableau=creTableau();
 lectureTableau($tableau);
 
 /*** Calcule et retourne la somme des éléments d'un tableau **
  *** passé en paramètre $table et retourne la somme *****/

 function sommeTableau($table)
 {
     $somme=0;
     for($i=0;i<count($table);$i++)
     {
        $somme+=$table[$i];
     }
     return $somme;
 }
