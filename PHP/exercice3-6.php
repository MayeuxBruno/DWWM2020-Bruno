<?php
$age=readline("Entrez l'age de l'enfant (6ans minimum) : ");
switch ($age){
    case 0: case 1: case 2: case 3: case 4: case 5:
        echo"L'enfant est trop jeune";
    break;
    case 6: case 7: 
        echo"La catégorie est Poussin";
    break;
    case 8: case 9:
        echo"La catégorie est Pupille";
    break;
    case 10: case 11:
        echo"La catégorie est Minime";
    break;
    default:
        echo"La catégorie est Cadet";
}