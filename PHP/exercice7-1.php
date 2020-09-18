<?php
include "fonctionstableau.php";
$i=0;
$flag=1;

$tableau=creTableau();

while (($flag==1)&&($i<count($tableau)-1))
{
    
    if(($tableau[$i+1]!=$tableau[$i]+1)&&($tableau[$i]!=$tableau[$i+1]+1))
    {
        $flag=0;
    }
    $i++;
}

if ($flag==0)
{
    echo "Les éléments du tableau ne sont pas consécutifs";
}
else
{
    echo "Les éléments du tableau sont consécutifs";
}