<?php
$total=0;

for($i=0;$i<9;$i++)
{
    do
    {
        $note=readline("Entrez la note numéro ".($i+1)." : ");
    }
    while(!is_numeric($note));
    $total+=$note;
    $tab[$i]=$note;
}

echo"Le tableau de notes est : '".implode($tab,"','")."'\n";
echo"La moyenne des notes est : ".($total/9);