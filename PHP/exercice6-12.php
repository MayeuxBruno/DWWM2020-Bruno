<?php
    do{
        $nbVal=readline("Entrez le nombre de notes à saisir : ");
    }
    while((!is_numeric($nbVal))||(!is_integer($nbVal*1))||($nbVal<=0));

    for($i=0;$i<$nbVal;$i++)
    {
        do
        {
            $val=readline("Entrez la valeur numéro ".($i+1)." : ");
        }
        while(!is_numeric($val));
        $tab[$i]=$val+1;
    }
    echo"Le nouveau tableau de valeurs est :'".implode($tab,"','")."'";
