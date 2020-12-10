var i=2;
var isprem=true;

do
{
    var nombre=prompt("Entrez un nombre : ");
}while(isNaN(nombre));

if(nombre>=2){
    while((i<nombre)&&(isprem==true))
    {
        if(nombre%i === 0)
        {
            isprem=false;
        }
        i++;
    }
}
else{
    isprem=false;
}
(isprem)?document.write(nombre+" est un nombre premier"):document.write(nombre+" n' est pas un nombre premier");

