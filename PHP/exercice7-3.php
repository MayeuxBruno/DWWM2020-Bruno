<?php
include "fonctionstableau.php";

$tableau=creTableau();
$tableau=inverseTableau($tableau);
afficheTableau($tableau);