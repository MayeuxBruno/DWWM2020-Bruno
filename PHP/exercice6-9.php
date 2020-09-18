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

 /*** Calcule et retourne la somme des éléments d'un tableau **
  *** passé en paramètre $table et retourne la somme *****/

  function sommeEltTableau($table)
  {
      $somme=0;
      for($i=0;$i<count($table);$i++)
      {
         $somme+=$table[$i];
      }
      return $somme;
  }

$tableau=creTableau();
echo "La somme des éléments du tableau est : ".sommeEltTableau($tableau);