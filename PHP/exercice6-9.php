<?php

require "fonctionstableau.php";

$tableau=creTableau();
echo "La somme des éléments du tableau est : ".array_sum($tableau);