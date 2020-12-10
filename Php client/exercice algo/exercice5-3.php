<?php
do {
    do {
        $nb = readline("Entrer un nombre : ");
    } while (!is_numeric($nb));
} while (!is_int($nb * 1));

for($i=0;$i<=10;$i++)
{
    echo$nb+$i."\n";
}