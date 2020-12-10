<?php
do{ 
    do{
        $nb=readline("Entrez un nombre compris entre 10 et 20 : ");  
    }
    while(!is_numeric($nb));
    echo($nb>20)?"Plus petit\n":"";
    echo($nb<10)?"Plus grand\n":"";
}
while($nb<10 || $nb>20);