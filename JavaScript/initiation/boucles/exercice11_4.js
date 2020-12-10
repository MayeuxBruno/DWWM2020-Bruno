var nombre1=parseInt(prompt("Entrez un nombre : "));
var nombre2=parseInt(prompt("Entrez un nombre : "));
var x,somme=0;
if(nombre1>nombre2)
{
    x=nombre1;
    nombre1=nombre2;
    nombre2=x;
}

for (i=nombre1;i<=nombre2;i++)
{
    somme+=i;
}
document.write("La somme des entiers de "+nombre1+" à "+nombre2+" est de "+somme);