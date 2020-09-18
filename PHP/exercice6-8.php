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

do
{
    $nb=saisieEntierPhrase("Entrez le nombre de valeurs à entrer : ");
}while($nb <= 0);
$tableau=saisieTableau($nb);
$result=posNeg($tableau);
echo "il y a ".$result[0]." valeurs negatives et ".$result[1]." valeurs positives";