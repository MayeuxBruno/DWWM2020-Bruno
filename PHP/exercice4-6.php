<?php
do{
    $cand1=readline("Entrez le score du premier candidat : ");
    $cand2=readline("Entrez le score du deuxième candidat : ");
    $cand3=readline("Entrez le score du troisième candidat : ");
    $cand4=readline("Entrez le score du quatrième candidat : ");
    if(($cand1+$cand2+$cand3+$cand4)!=100){
        echo"Saisie des résultats incorrecte \n";
    }
}while(($cand1+$cand2+$cand3+$cand4)!=100);

if ($cand1>50){
    echo"Le candidat 1 est élu au premier tour";
}
else if(($cand2>50)or($cand3>50)or($cand4>50)){
    echo"Le candidat 1 à perdu";
}
else if ($cand1>12.5) {
    if (($cand1>$cand2)and($cand1>$cand3)and($cand1>$cand4)){
        echo"Le candidat 1 est en ballotage favorable";
    }
    else{
        echo"Le candidat 1 est en ballotage défavorable";
    }
}
else{
    echo"Le candidat 1 à perdu";
}


