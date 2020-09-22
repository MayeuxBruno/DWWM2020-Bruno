<?php

/******************************************************** 
*** Controle de la saisie d'un entier avecl'intitule  ***
***pour la saisie de l'utilisateur passé en paramètre ***
***      par $phrase et retourne l'entier saisi       ***
********************************************************/
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


/****************************************************************************************
 ***                        Crétation et lecture de tableaux                          ***
 ****************************************************************************************/



 /*******************************************************
 ***  creation de tableau avec la taille non définie  ***
 ***  retourne un $tableau. Cette fonction nécessite  ***
 ***  la fonction saisieEntierPhrase pour fonctionner ***
 ********************************************************/
 function creTableau()
 {  
     do
     {
        $valeur=saisieEntierPhrase("Entrez une valeur ( 0 pour stopper la saisie) : ");
        if ($valeur!=0)
        {
            $table[]=$valeur;
        }
     }while($valeur!=0);
    return $table;
 }

/****************************************************************
 *** creation de tableau avec la taille définie en paramètre  ***
 *** $taille et retourne un tableau. Cette fonction necessite ***
 ***      la fonction saisieEntierPhrase pour fonctionner     ***
 ****************************************************************/

 function saisieTableau($taille)
 {
     for($i=0;$i<$taille;$i++)
     {
         $table[]=saisieEntierPhrase("Entrez une valeur : ");
     }
     return $table;
 }

/****************************************************************
 *** creation de tableau avec la taille définie en paramètre  ***
 *** $taille ainsi que l'intitulé pour la demande de saisie   ***
 ***   de l'utilisateur $phrase et retourne un tableau.       ***
 ***  Cette fonction necessite la fonction saisieEntierPhrase ***
 ***                   pour fonctionner                       ***
 ****************************************************************/
 
function saisieTableauPhrase($taille,$phrase)
{
    for($i=0;$i<$taille;$i++)
    {
        $table[]=saisieEntierPhrase($phrase);
    }
    return $table;
}

/******************************************************
 ***  Affiche le tableau entré en paramètre $table  ***
 ***           fonctionne en boucle for             ***
 ******************************************************/

 function lectureTableau($table)
 {  
     echo "\n";
     for($i=0;$i<count($table);$i++)
     {
         echo $table[$i]."\t";
     }
     echo "\n";
 }

/******************************************************
 ***  Affiche le tableau à deux dimensions entré    ***
 *** en paramètre $table fonctionne en boucle for   ***
 ******************************************************/

function lectureTableauDouble($table)
{  
    for ($i=0;$i<count($table);$i++)
    {
        for ($j=0;$j<count($table[$i]);$j++)
        {
            echo $table[$i][$j]."\t";
        }
        echo"\n";
    }
    echo"\n";
}


 /******************************************************
 ***  Affiche le tableau entré en paramètre $table  ***
 ***         fonctionne en boucle foreach           ***
 ******************************************************/
 
 function afficheTableau($table)
 {
     echo "\n";
     foreach($table as $valeur)
     {
         echo $valeur."\t";
     }
     echo "\n";
 }


 /****************************************************************************************
 ***                               Tris de tableaux                                    ***
 ****************************************************************************************/


/******************************************************
 ***  Effectue le tri à bulles du tableau passé en  ***
 ***                 paramètre $table               ***
 ******************************************************/
 function triAbulles($table)
{
    $permut=1;
    while ($permut==1)
    {
        $permut=0;
        for ($i=0;$i<(count($table))-1;$i++)
        {
            if($table[$i]<$table[$i+1])
            {
                $temp=$table[$i];
                $table[$i]=$table[$i+1];
                $table[$i+1]=$temp;
                $permut=1;
            } 
        }
    }
    return $table;    
}

/******************************************************
 ***    Effectue le tri par insertion du tableau    *** 
 ***           passé en paramètre $table            ***
 ******************************************************/

function triInsertion($table)
{
    $flag=0;
    for ($i=0;$i<(count($table)-1);$i++)
    {
        $valeurMin=$table[$i];
        $index=$i;
        for ($j=$i+1;$j<count($table);$j++)
        {
            if ($table[$j]<$valeurMin)
            {
                $valeurMin=$table[$j];
                $index=$j;
                $flag=1;
                
            }
        }
        if ($flag==1)
        {
            $table[$index]=$table[$i];
            $table[$i]=$valeurMin;
            $flag=0;
        }
    }
    return $table;
}

/********************************************************
 *** Effectue une recherche dichotomique d'un élément ***     
 ***   passé en paramètre $element dans le tableau    *** 
 ***  passé en paramètre $table et retourne un entier ***
 ***     1->élément trouvé, 0->élément non trouvé     ***
 ********************************************************/

function rechercheDicho($element,$table)
{
    $trouve=$debut=0;
    $fin=count($table)-1;
    do
    {
        $milieu=intdiv($debut+$fin,2);
        if ($table[$milieu]==$element)
        {
            $trouve=1;
        }
        else
        {
            if ($element<$table[$milieu])
            {
               $fin=$milieu-1;
            }
            else
            {    
               $debut=$milieu+1;
            }
        }
    }while (($trouve==0) && ($debut<= $fin));
    return $trouve;
}


/****************************************************************************************
 ***                          Calculs sur les tableaux                                ***
 ****************************************************************************************/


/**********************************************************
***   Calcule et retourne la somme des éléments d'un    ***
***   tableau passé en paramètre $table et retourne     ***
***                      la somme                       ***
**********************************************************/

  function sommeTableau($table)
  {
      $somme=0;
      for($i=0;$i<count($table);$i++)
      {
         $somme+=$table[$i];
      }
      return $somme;
  }

/********************************************************* 
***    Calcule la somme élément par élément de deux    ***
*** tableaux passés en paramètres ($table1 et $table2) ***
***    et retourne un tableau contenant le résultat    ***
*********************************************************/

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
/********************************************************* 
***     Incrémente les éléments d'un tableau passé     *** 
***     en paramètre $table et retourne le tableau     ***
*********************************************************/

function incrementElementTableau($table)
{
    for($i=0;$i<count($table);$i++)
    {
        $table[$i]+=1;
    }
    return $table;
}

/*********************************************************
 ***    Indique si les éléments du tableau passé en    ***
 *** paramètre $table sont consécutifs. Retourne 1 si  ***
 ***         ils sont consécutis sinon 0               ***
 ********************************************************/
function isConsecutif($table)
{
    $flag=1;
    $i=0;
    while (($flag==1)&&($i<count($table)-1))
    {
        if(($table[$i+1]!=$table[$i]+1)&&($table[$i]!=$table[$i+1]+1))
        {
            $flag=0;
        }
        $i++;
    }
    return $flag;
}

/****************************************************************************************
 ***                          Manipulation des tableaux                               ***
 ****************************************************************************************/


/********************************************************* 
***      Inverse les éléments d'un tableau passé       *** 
***     en paramètre $table et retourne le tableau     ***
*********************************************************/
function inverseTableau($table)
{   
    for ($i=0;$i<intdiv(count($table),2);$i++)
    {
        $j=(count($table)-1-$i);
        $temp=$table[$j];
        $table[$j]=$table[$i];
        $table[$i]=$temp;
    }
    return $table;
}

/******************************************************** 
*** Supprime un éléments passé en paramètre $element  ***
***     d'un tableau passé en paramètre $table et     ***
***               retourne le tableau                 ***
*********************************************************/

function supElementTableau($table,$element)
{
    $flag=$i=0;
    do
    {
        if($table[$i]==$element)
        {
            $index=$i;
            $flag=1;
        }
        $i++;
    }while(($i<count($table))&&($flag!=1));
    if ($flag==0)
    {
        echo "La valeur à supprimer est intouvable...";
    }
    else 
    {
        unset($table[$index]);
    }
    return $table;
}

 /*************************************************************
 ***   Retourne la valeur maximale et d'un tableau entrée   *** 
 ***    en paramètre sous forme d'un tableau valeur à       ***
 ***         l'indice 0 et la clé à l'indice 1              ***
 *************************************************************/
function maxTableau($table)
{
    $max=array(0,0);
    for($i=0;$i<count($table);$i++)
    {
        if ($table[$i]>$max[0])
        {
            $max[0]=$table[$i];
            $max[1]=$i+1;
        }
    }
    return $max;
}

/*****************************************************************
 ***    Retourne la valeur minimale d'un tableau entrée en     ***
 *** paramètre avec son index de début sous forme d'un tableau ***
 ***   valeur à l'indice 0 et la clé à l'indice 1              ***
*****************************************************************/
function minTableau($table,$index)
{
    $min[0]=$table[$index];
    for($i=$index;$i<count($table);$i++)
    {
        if ($table[$i]<$min[0])
        {
            $min[0]=$table[$i];
            $min[1]=$i;
        }
    }
    return $min;

}
