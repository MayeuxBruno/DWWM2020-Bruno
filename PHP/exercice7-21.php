<?php
/****** Saisie d'un tableau d'entiers 
 *       avec la taille définie ******/
function saisieTableau($nbElement)
{
    for($i=0;$i<$nbElement;$i++)    
    {
        do
        {   
            do
            {
                $nombre=readline("Entrez une valeur :  ");
            }while(!is_numeric($nombre));
        }while(!is_integer($nombre*1));
        $tab[$i]=$nombre;
    }
    return $tab;
}

/****** Affiche le contenu d'un tableau ******/
function lectureTableau($table)
{
    echo $table[0];
    for ($j=1;$j<count($table);$j++)
    {
        echo " - ".$table[$j];  
    }
    echo "\n";
}

/****** Effectue un tri à bulles du tableau ******/
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


$tableau=saisieTableau(10);
$tableau=triAbulles($tableau);
lectureTableau($tableau);