var age;
var jeunes=moyens=vieux=0

do
{
    do
    {
        age = parseInt(prompt("Entrez l'age de la personne : "));
    }while(isNaN(age));

    if(age<20)
    {
        jeunes+=1;
    }
    else if (age<=40){
        moyens+=1;
    }
    else{
        vieux+=1;
    }

}while(age!=100);

document.write("Il y a : <br>"+jeunes+" jeunes<br> "+moyens+"moyens<br> "+vieux+"vieux");