var prime=0;
var enfants=0;
var salaire =parseInt(prompt("Entrez le salaire de l'emplyé : "));

if(salaire<1200)
{
    prime+=10;
}

if (window.confirm("L'employé es il marié ?")==true)
{
    prime+=25;
}
else{
    prime+=20;
}

enfants=parseInt(prompt("Entrez le nombre d'enfants de l'employé : "));
prime+=(enfants*10);

if (prime>50)
{
    prime=50;
}

document.write("Le montant de la prime de l'employe est de "+prime+" %" );

