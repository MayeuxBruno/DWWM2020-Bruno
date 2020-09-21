<?php

for ($i=0;$i<13;$i++)
{
    for ($j=0;$j<9;$j++)
    {
        $tab[$i][$j]=rand(0,100);
        echo $tab[$i][$j]."\t";
    }
    echo"\n";
}

$min=$tab[0][0];
for ($i=0;$i<13;$i++)
{
    for ($j=0;$j<9;$j++)
    {
        if($tab[$i][$j]<$min)
        {
            $min=$tab[$i][$j];
        }
    }
}
echo "\nLa valeur minimale du tableau est ".$min."\n";