function compteLettre(phrase,lettre)
{
    var nb=0;
    for(i=0;i<phrase.length;i++)
    {
        if((phrase.substr(i,1))==lettre)
        {
             nb++;
        }
    }
    return nb;
}

var phrase=prompt("Entrez une phrase : ").toLowerCase()
var lettre=prompt("Entrez la lettre à rechercher : ").toLowerCase()
document.write("La lettre "+lettre+" apparait "+(compteLettre(phrase,lettre))+" fois dans la phrase");