function compteLettre(phrase,lettre)
{
    var nb=0;
    for(i=0;i<phrase.lenght;i++)
    if((phrase.substr(i,1))==lettre)
    {
        nb++;
    }
}

var phrase=promp("Entrez une phrase : ").toLowerCase()
document.write(phrase);