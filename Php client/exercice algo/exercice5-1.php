<?php
do
{
    $nb=readline("Entrez un nombre entre 1 et 3 : ");  
}
while($nb<1||$nb>3||!(is_numeric($nb)));