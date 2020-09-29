<?php

$t[0]=[0,1,2];
$t[1]=[3,4,5];
$t[2]=[6,7,8];

echo "\t    ";
for($l=0;$l<3;$l++)
{
    echo ($l+1)."   ";
}
echo "\n";
for($i=0;$i<3;$i++)
{
    echo "\t  -------------\n";
    echo "\t".($i+1);
    for($j=0;$j<3;$j++)
    {
        echo " | ".$t[$i][$j];
    }
    echo" |";
    echo "\n";
}
echo "\t  -------------\n";

