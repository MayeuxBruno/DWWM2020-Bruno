var x,n;
do
{
    x=parseInt(prompt("Entrez un entier : "));
}while(isNaN(x))

do
{
    n=parseInt(prompt("Combien souhaitez vous de multiples ? "));
}while(isNaN(n))

for(i=1;i<=n;i++)
{
    document.write(i+" X "+x+" = "+(i*x)+"<br>");
}