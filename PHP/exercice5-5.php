<?php
do{
    do{
        $nb=readline("Entrez un nombre : ");
    }
    while(!is_numeric($nb));
}
while(!is_integer($nb*1));

$somme=0;
for($i=1;$i<=$nb;$i++)
{
    $somme=$somme+$i;
}
echo$somme;