function TableMultiplication(table)
{
    for(i=1;i<=10;i++)
    {
        document.write(i+" X "+table+" = "+(table*i)+"<br>");
    }
}

//Controle que la saisie soit un nombre positif
do
{
    var nb=parseInt(prompt("Entrez la table à afficher : "));
}while(isNaN(nb)||nb<0);

TableMultiplication(nb);


