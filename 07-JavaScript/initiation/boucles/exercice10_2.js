var nombre=parseInt(prompt("Entrez un nomnbre : "));
document.write ("Les nombres inférieurs à "+nombre+" sont : <br>");
for (i=1;i<nombre;i++)
{
    document.write(i+" ");
}