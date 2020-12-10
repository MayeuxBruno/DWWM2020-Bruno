var nombre;
var max=0;
var min=0;
var i=0;

do
{
    do
    {
        nombre=parseInt(prompt("Entrez un nombre : "));
    }while(isNaN(nombre))
   
    if(nombre!=0)
    {
        if(i==0||nombre<min)
        {
            min=nombre;
        }
        if(i==0||nombre>max)
        {
            max=nombre;
            i=1;
        }
        
    }
}while(nombre!=0);

document.write("Le nombre mini est "+min+"<br> Le nombre maxi est "+max);