do
{
    var taille=parseInt(prompt("Entrez la taille du tableau : "));
}while(isNaN(taille));

var table = Array(taille);

for(var i=0;i<table.length;i++)
{
    table[i]=prompt("Entrez la valeur "+(i+1)+" : ");
}

//Affichage avec foreach
for (var elt in table)
{
    document.write(table[elt]+" ");
}

document.write("<br>");

//Affichage avec boucle for
for(var i=0;i<table.length;i++)
{   
    if (i<table.length-1)
    {
        document.write(table[i]+" - ");
    }
    else{
        document.write(table[i]);
    }
}
