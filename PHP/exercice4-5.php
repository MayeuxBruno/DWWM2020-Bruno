<?php
/******* Test l'entrée de l'age  ********/
do{
    $age=readline("Entrez l'age de la personne : ");
    if ($age<=0){
        echo"L'age n'est pas valide\n";
    }
}while ($age<=0);

/******* Teste du genre ***********/
do{
    $genre=strtolower(readline("Entrez le genre de la personne (h/f) :"));
    if (($genre!="h")and($genre!="f")){
        echo"Le sexe n'est pas correcte\n";
    }
}while (($genre!="h")and($genre!="f"));

if ((($genre=="h")&&($age>20))||(($genre=="f")&&($age>18)&&($age<35)))
{
    echo"L'habitant est imposable";
}
else
{
    echo"L'habitant n'est pas imposable";
}


