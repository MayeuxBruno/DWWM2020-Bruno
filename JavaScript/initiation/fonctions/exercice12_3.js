function compteLettre(phrase,lettre)
{
    var nb=0;
    var lt;
    for(i=0;i<phrase.lenght;i++)
    lt=phrase.substr(i,1);
    if(lt==lettre)
    {
        nb++;
    }
    return nb;
}

var phrase=prompt("Entrez une phrase : ").toLowerCase()
var lettre=prompt("Entrez la lettre à rechercher : ").toLowerCase()
document.write("La lettre "+lettre+" apparait "+(compteLettre(phrase,lettre))+" foois dans la phrase");