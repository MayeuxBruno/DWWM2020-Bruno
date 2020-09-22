<?php

include "fonctionstableau.php";

// Genère le tableau aléatoire
for($i=0;$i<20;$i++)
{
    $tableau[$i]=rand(1,100);
}
//$tableau=creTableau();
$tableau=triAbulles($tableau);
lectureTableau($tableau);