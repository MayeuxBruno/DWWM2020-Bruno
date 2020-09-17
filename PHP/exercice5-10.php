<?php
$facPart=$facJoue=$facDif=1;
/**** Controle de la saisie des données ****/
do
{
    do
    {
        $partant=readline("Entrez le nombre de chevaux partants : ");
    }
    while(!is_numeric($partant));
} 
while((!is_integer($partant*1))||($partant<=0));
do
{
    do
    {
        $joue=readline("Entrez le nombre de chevaux joués : ");
    }
    while(!is_numeric($joue));
} 
while((!is_integer($joue*1))||($joue>$partant)||($joue<=0));
    
/*** Calcule des factorielles ***/

for ($i=1;$i<=$partant;$i++)
{
    $facPart*=$i;
    if($i<=$joue)
    {
        $facJoue*=$i;
    }
    if($i<=($partant-$joue))
    {
        $facDif*=$i;
    }
}
/**** calcul et affichage des probabilités ****/
echo "Dans l'ordre, 1 chance sur ".$facPart/$facDif." de gagner.\n";
echo "Dans le désordre 1 chance sur ".($facPart/($facJoue*$facDif))." de gagner.\n";