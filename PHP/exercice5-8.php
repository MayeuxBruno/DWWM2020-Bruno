<?php
$max=$pos=0;
$i=1;

do
{
    do{
        do{
            $nb=readline("Entrez un nombre numéro ".$i." (0pour arréter) : ");
        }
        while(!is_numeric($nb));
    }
    while(!is_integer($nb*1));
    if($nb!=0)
    {
        if($nb>$max)
        {
            $max=$nb;
            $pos=$i;
        }
    }
    $i++;
}
while($nb!=0);
echo"Le plus grand nombre est : ".$max." entré en position : ".$pos;