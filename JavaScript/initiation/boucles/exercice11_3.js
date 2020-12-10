var nombre=parseInt(prompt("Entrez un nomnbre : "));
var somme=0;

for (i=0;i<nombre;i++)
{
    somme+=i;
}

document.write ("La somme des nombres inférieurs à "+nombre+" est : "+somme);