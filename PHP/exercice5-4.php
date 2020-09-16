<?php
do{
    do{
        $nb=readline("Entrez un nombre : ");
    }
    while(!is_numeric($nb));
}
while(!is_integer($nb*1));

for($i=1;$i<=10;$i++)
{
    echo$nb." X ".$i." = ".$nb*$i."\n";
}