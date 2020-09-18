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
            $temp=$table[$i];
            $table[$i]=$valeurMin;
            $table[$index]=$temp;
            $flag=0;
        }
    }
    return $table;
}




/****** Retourne la valeur maximale et d'un tableau entrée en paramètre * 
 **** sous forme d'un tableau valeur à l'indice 0 et la 
 **** clé à l'indice 1           */
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

/****** Retourne la valeur minimale d'un tableau entrée en paramètre avec son index de début * 
 **** sous forme d'un tableau valeur à l'indice 0 et la 
 **** clé à l'indice 1           */
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

 
 /*** Calcule et retourne la somme des éléments d'un tableau **
  *** passé en paramètre $table et retourne la somme *****/

 function sommeTableau($table)
 {
     $somme=0;
     for($i=0;$i<count($table);$i++)
     {
        $somme+=$table[$i];
     }
     return $somme;
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

/***** Incrémente les éléments d'un tableau entré en paramètre $table */
function incrementElementTableau($table)
{
    for($i=0;$i<count($table);$i++)
    {
        $table[$i]+=1;
    }
    return $table;
}



