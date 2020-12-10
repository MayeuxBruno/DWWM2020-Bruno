function GetInteger(intitule)
{
    let valeur;
    do
    {
        valeur=parseInt(prompt(intitule+" : "));
    }while(isNaN(valeur));
    return valeur;
}

function InitTab()
{
    let taille=GetInteger("Entrez la taille du tableau");
    let tab=Array(taille);
    return tab;
}

function SaisieTab(tab)
{
    for(i=0;i<tab.length;i++)
    {
        tab[i]=GetInteger("Entrez la valeur "+(i+1));
    }
    return tab;
}

function AfficheTab(tab)
{
    document.write("Le contenu du tableau est :<br>");
    for (var elt in tab)
    {
        document.write(tab[elt]+" ");
    }
}

function RechercheTab(tab)
{
    let index=GetInteger("Entrez le numéro du poste à rechercher");
    index=index-1;
    if ((index<tab.length)&&(index<=0))
    {
        document.write("La valeur de poste recherché est : "+tab[index]+"<br>");
    }
    else{
        document.write("Index hors tableau...<br>");
    }
}

function InfoTab(tab)
{
    let somme=0;
    document.write("La valeur Maxi est : "+(Math.max.apply(null, tab))+"<br>");
    for (var elt in tab)
    {
        somme+=tab[elt];
    }
    document.write("La moyenne des postes est : "+(somme/(tab.length))+"<br>");
}

var tableau = InitTab();
SaisieTab(tableau);
var action=prompt("1- Affichage du contenu de tous les postes du tableau\n2- Affichage du contenu d'un poste\n3- Affichage du maxi et de la moyenne\nEntrez votre choix ");

switch(action)
{
    case "1":
        AfficheTab(tableau);
        break;
    case "2":
        RechercheTab(tableau);
        break;
    case "3":
        InfoTab(tableau);
        break;
    default:
        document.write("Choix Invalide");
}
