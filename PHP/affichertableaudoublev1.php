<?php
$t[0]=[0,1,2,4,0,5,3];
$t[1]=[3,4,5,4,3,5,3];
$t[2]=[6,7,8,9,8,1,2];
$t[3]=[0,9,8,50,4,9,4];
$t[4]=[4,5,6,5,2,1,2];

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
        echo "----";
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
    echo "----";
}
