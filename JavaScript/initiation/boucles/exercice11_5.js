var somme=0;
var nbr,cpt=0;
do
{
    nbr=parseInt(prompt("Entrez un nombre (0 pour arreter) : "));
    if (nbr!=0)
    {
        somme+=nbr;
        cpt++;
    }
}while(nbr!=0);

document.write("La somme est de "+somme+"<br>");
document.write("La moyenne est de "+(somme/cpt));
