<?php
do{
    do{
        $nb=readline("Entrez un nombre : ");
    }
    while(!is_numeric($nb));
}
while(!is_integer($nb*1));
$fact=1;
for($i=1;$i<=$nb;$i++)
{
    $fact=$fact*$i;
    echo$i;
    echo($i!=$nb)?"x":"=";
}
echo$fact;