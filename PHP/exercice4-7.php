<?php
do{
    $age=readline("Entrez l'age du conducteur :  ");
    if($age<18){
        echo"Age non valide\n";
    }
}while($age<18);

do{
    $permis=readline("Entrez le nombre d'années de permis : ");
    if ($permis<0){
        echo"Années de permis non valide\n";
    }
}while($permis<0);

do{
    $accident=readline("Entrez le nombre d'accident : ");
    if ($accident<0){
        echo"Nombre d'accidents non valide\n";
    }
}while($accident<0);

do{
    $presence=readline("Entrez le nombre d'années de présence : ");
    if ($presence<0){
        echo"Nombre d'années de présence non valide\n";
    }
}while($presence<0);

$bonus=0;
if(($age<25)){
    $bonus+=1;
}
if($permis<2){
    $bonus+=1;
}
$bonus+=$accident;


switch ($bonus){
    case 0:
         echo"Vous bénéficiez du tarif vert";
    break;
    case 1:
        echo"Vous bénéficiez du tarif orange";
    break;
    case 2:
        echo"Vous bénéficiez du tarif rouge";
    break;
    default :
        echo"Vous ne pouvez pas être assuré";     
}

