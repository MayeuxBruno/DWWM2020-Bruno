<?php
$age=readline("Entrez l'age de l'enfant (6ans minimum) : ");
switch ($age){
    
    case 6: case 7: 
        echo"La catégorie est Poussin";
    break;
    case 8: case 9:
        echo"La catégorie est Pupille";
    break;
    case 10: case 11:
        echo"La catégorie est Minime";
    break;
    case 12: case 13:
        echo"La catégorie est cadet";
    break;
    default:
        echo"L'age ne correspond à aucune catégorie";
}