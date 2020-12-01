<?php
$max=$pos=0;
for($i=1;$i<=20;$i++)
{
    do{
        do{
            $nb=readline("Entrez un nombre numéro".$i." : ");
        }
        while(!is_numeric($nb));
    }
    while(!is_integer($nb*1)); 
    if ($nb>$max)
    {
        $max=$nb;
        $pos=$i;
    }
}
echo"Le plus grand nombre est : ".$max." entré en position : ".$pos;