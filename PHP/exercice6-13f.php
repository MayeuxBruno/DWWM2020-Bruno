<?php
include "fonctionstableau.php";

$max=0;
$tableau=creTableau();
for($i=0;$i<count($tableau);$i++)
{
    if($tableau[$i]>$max)
    {
        $max=$tableau[$i];
        $index=$i+1;
    }
}
echo "La valeur maximale du tableau est de ".$max." située à la position ".$index;
