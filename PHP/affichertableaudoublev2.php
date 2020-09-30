<?php
$t[0]=[0,1,2,4,0];
$t[1]=[3,4,5,4,1];
$t[2]=[6,7,8,9,2];
$t[3]=[1,20,1,3,4];
$t[4]=

echo "\t\t\t";
for($l=0;$l<count($t[0]);$l++)
{
    echo ($l+1)."\t\t";
}
echo "\n";

for($i=0;$i<count($t);$i++)
{
    echo "\t\t";
    for($l=0;$l<count($t[0]);$l++)
    {
        echo "----------------";
    }
    echo "\n";
    echo "\t".($i+1);
    for($j=0;$j<count($t[$i]);$j++)
    {
        echo "\t|\t".$t[$i][$j];
    }
    echo"\t|";
    echo "\n";
}
echo "\t\t";
for($l=0;$l<count($t[0]);$l++)
    {
        echo "----------------";
    }
    echo "\n";