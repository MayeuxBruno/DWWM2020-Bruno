<?php

$t[0]=[10,10,20,40,10,50,30];
$t[1]=[3,4,5,4,3,5,3];
$t[2]=[6,7,8,9,8,1,2];
$t[3]=[0,9,8,5,4,9,4];
$t[4]=[4,5,6,5,2,1,2];

$max=0;
for($i=0;$i<count($t);$i++)
{
   if($max<max($t[$i]))
   {
       $max=max($t[$i]);
   }
}
echo "La valeur maxi du tableau est : $max \n";
if (($max>-10)&&($max<10))
{
    $espace="----";
}
else
{
    $espace="-----";
}

echo "\t    ";
for($l=0;$l<count($t[0]);$l++)
{
    echo ($l+1)."   ";
}
echo "\n";

for($i=0;$i<count($t);$i++)
{
    echo "\t   ";
    for($l=0;$l<count($t[0]);$l++)
    {
        echo $espace;
    }
    echo "\n";
    echo "\t".($i+1);
    for($j=0;$j<count($t[$i]);$j++)
    {
        echo " | ".$t[$i][$j];
    }
    echo" |";
    echo "\n";
}
echo "\t   ";
for($l=0;$l<count($t[0]);$l++)
{
    echo $espace;
}