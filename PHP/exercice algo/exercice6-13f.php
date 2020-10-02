<?php
require "fonctionstableau.php";

$tableau=creTableau();
$max=$tableau[0];
$position=0;
for($i=0;$i<count($tableau);$i++)
{
    if($tableau[$i]>$max)
    {
        $max=$tableau[$i];
        $position=$i;
    }
}
echo "La valeur maximale du tableau est de ".$max." située à la position ".$position;

/* Version 2 */
echo "Le maxi est".max($tableau)."il est à la position ".array_search(max($tableau),$tableau);