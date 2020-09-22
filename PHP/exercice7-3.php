<?php
require "fonctionstableau.php";

$tableau=creTableau();

for ($i=0;$i<intdiv(count($tableau),2);$i++)
{
        $j=(count($tableau)-1-$i);
        $temp=$tableau[$j];
        $tableau[$j]=$tableau[$i];
        $tableau[$i]=$temp;
}

afficheTableau($tableau);