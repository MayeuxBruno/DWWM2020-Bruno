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

function Somme()
{
    let somme=0;
    let nbr,cpt=0;
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

function CompteLettre()
{
    let phrase=prompt("Entrez une phrase : ").toLowerCase()
    let lettre=prompt("Entrez la lettre à rechercher : ").toLowerCase()
    let nb,l,i;
    for(l=0;l<lettre.length;l++)
    {
        nb=0;
        caractere=lettre.substr(l,1);
        if (caractere>='a'&& caractere<='z') //Ignorer tout acarctère qui ne serait pas une lettre
        {
            for(i=0;i<phrase.length;i++)
            {
                if((phrase.substr(i,1))==caractere)
                {
                    nb++;
                }
            }
            document.write("La lettre "+caractere+" apparait "+nb+" fois dans la phrase<br>");
        }
    }
}

var choix=prompt("1- Multiples\n2- Somme et moyenne\n3- Recherche du nombre de voyelles\n4- Recherche du nombre des caractères suivants\nEntrez votre choix");
switch(choix)
{
    case "1":
        TableMultiplication();
        break;
    case "2":
        Somme();
        break;
    case "3":
        Voyelles();
        break;
    case "4":
        CompteLettre();
        break;
        default:
            document.write("Choix incorrecte");
}