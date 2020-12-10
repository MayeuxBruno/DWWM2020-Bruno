function TableMultiplication()
{
    do
    {
        var nb=parseInt(prompt("Entrez la table à afficher : "));
    }while(isNaN(nb)||nb<0);

    for(i=1;i<=10;i++)
    {
        document.write(i+" X "+nb+" = "+(nb*i)+"<br>");
    }
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
        break;
    case "4":
        break;
        default:
            document.write("Choix incorrecte");
}