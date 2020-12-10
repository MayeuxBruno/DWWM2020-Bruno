var nbmagic=parseInt(Math.random()*(1,100));

do
{
    do
    {
        var nbr=parseInt(prompt("Entrez un nombre : "));
    }while(isNaN(nbr));

    if(nbr<nbmagic)
    {
        alert("Plus grand");
    }
    else if(nbr>nbmagic)
    {
        alert("Plus petit");
    }
}while(nbr!=nbmagic);

document.write("Trouvé!!! <br> Le nombre Magique était bien "+nbmagic);
