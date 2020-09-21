<?php
include "fonctionstableau.php";
$consecutif=1;

$tableau=creTableau();
$consecutif=isConsecutif($tableau);
if ($consecutif==0)
{
    echo "Les éléments du tableau ne sont pas consécutifs";
}
else
{
    echo "Les éléments du tableau sont consécutifs";
}