<?php
require "fonctionstableau.php";
$flag=1;
$i=0;

$tableau=creTableau();

if ($tableau[$i+1]==$tableau[$i]+1)
{
    $sens="c";
}
else 
{
    $sens="d";
}
echo $sens;
while (($flag==1)&&($i<count($tableau)-1))
{
    
    if($sens=="c")
    {
        if($tableau[$i+1]!=$tableau[$i]+1)
        {
            $flag=0;
        }
    }
    else
    {
        if($tableau[$i+1]!=$tableau[$i]-1)
        {
            $flag=0;
        }
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