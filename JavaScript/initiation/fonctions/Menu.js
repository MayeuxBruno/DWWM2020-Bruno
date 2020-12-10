function TableMultiplication()
{
    let i,nb;
    do
    {
        nb=parseInt(prompt("Entrez la table à afficher : "));
    }while(isNaN(nb)||nb<0);

    for(i=1;i<=10;i++)
    {
        document.write(i+" X "+nb+" = "+(nb*i)+"<br>");
    }
}

function Voyelles()
{
    let chaine;
    let carac;
    let voyelles=0;
    chaine=prompt("Veuillez saisir un mot : ");
    chaine=chaine.toLowerCase()

    for (i=0;i<chaine.length;i++)
    {
        carac=chaine.substr(i,1);
        if (carac=="a"||carac=="e"||carac=="i"||carac=="o"||carac=="u"||carac=="y")
        {
            voyelles+=1;
        }
    }
    document.write("Le mot entré contient "+voyelles+" voyelles");
}

var choix=prompt("1- Multiples\n2- Somme et moyenne\n3- Recherche du nombre de voyelles\n4- Recherche du nombre des caractères suivants\nEntrez votre choix");
switch(choix)
{
    case "1":
        TableMultiplication();
        break;
    case "2":
        
        break;
    case "3":
        Voyelles();
        break;
    case "4":
        break;
        default:
            document.write("Choix incorrecte");
}