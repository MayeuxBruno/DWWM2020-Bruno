<?php
$t[0]=[0,1,2,4,0,5,3,2,1,2];
$t[1]=[3,4,5,4,3,5,3,1,2,2];
$t[2]=[6,7,8,9,8,1,2,3,4,2];
$t[3]=[0,9,8,5,4,9,4,5,6,4];
$t[4]=[4,5,6,5,2,1,2,7,8,5];
$t[5]=[3,4,5,4,3,5,3,9,8,6];
/*$t[6]=[6,7,8,9,8,1,2,7,8,7];
$t[7]=[0,9,8,0,4,9,4,0,2,8];
$t[8]=[4,5,6,5,2,1,2,9,5,9];
$t[9]=[0,1,2,4,0,5,3,6,5,1];
$t[10]=[3,4,5,4,3,5,3,8,9,1];
$t[11]=[6,7,8,9,8,1,2,8,5,1];
$t[12]=[0,9,8,5,4,9,4,1,0,1];
$t[13]=[4,5,6,5,2,1,2,1,2,1];
$t[14]=[3,4,5,4,3,5,3,7,8,1];
$t[15]=[6,7,8,9,8,1,2,6,3,1];
$t[16]=[0,9,8,5,4,9,4,1,2,1];
$t[17]=[4,5,6,5,2,1,2,1,2,1];
*/

// Affiche la ligne d'index horizontale
echo "\t     ";
for($l=1;$l<=count($t[0]);$l++)
{
    if($l<9){
        echo ($l)."   ";
      }
      else{     // si l'indes est >9 on enlève un " "
        echo ($l)."  ";
      }
    
}
echo "\n";

// Affichage des lignes du tableau
for($i=0;$i<count($t);$i++)
{
    echo "\t   ";
    for($l=0;$l<count($t[0]);$l++)  // ligne en ------
    {
        echo "----";
    }
    echo "\n";
    if($i<9){       // Affiche l'index de la ligne
      echo "\t ".($i+1);
    }
    else{
        echo"\t".($i+1);     // si l'indes est >9 on enlève un " "
    }
      for($j=0;$j<count($t[$i]);$j++)
    {
        echo " | ".$t[$i][$j];     // affiche les valeurs de la ligne séparé par des |
    }
    echo" |";
    echo "\n";
}

//affiche la dernière ligne de ------ du tableau 
echo "\t   ";
for($l=0;$l<count($t[0]);$l++)
{
    echo "----";
}
