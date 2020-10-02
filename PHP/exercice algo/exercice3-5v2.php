<?php
$nb1=readline("Entrez le premier nombre : ");
$nb2=readline("Entrez le deuxième nombre :  ");
if (($nb1==0)or($nb2==0)){
    echo"Le produit est nul";
}elseif (($nb1<0)xor($nb2<0)){
     echo"Le produit est négatif";
}else{
    echo "Le produit est positif";
}