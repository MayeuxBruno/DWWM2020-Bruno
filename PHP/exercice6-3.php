<?php
for($i=0;$i<9;$i++)
{
    do
    {
        $note=readline("Entrez la note numéro ".($i+1)." : ");
    }while(!is_numeric($note));
    $tab[$i]=$note;
}

echo "Le tableau de note est : '".implode($tab,"','")."'";
