<?php

$pos=$max=0;

do
{
    $nbVal=readline("Entrez le nombre de valeurs à saisir : ");
}
while((!is_numeric($nbVal))||(!is_integer($nbVal*1))||($nbVal<=0));

for($i=0;$i<$nbVal;$i++)
{
    do
    {
        $val=readline("Entrez la valeur ".($i+1)." : ");
    }
    while(!is_numeric($val));
    $tab[$i]=$val;
}

for($i=0;$i<$nbVal;$i++)
{
    if($max<$tab[$i])
    {
        $max=$tab[$i];
        $pos=$i;
    }
}
echo"La valeur maxi est ".$max." saisie en position ".($pos+1);
