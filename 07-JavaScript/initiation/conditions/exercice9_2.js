var date=new Date();
var age;
var annee=parseInt(prompt("Entrez votre annee de Naissance : "));
age = date.getFullYear()-annee;
document.write("Votre age est de "+age+" ans.<br>");
if (age<18){
    document.write("Vous êtes mineur.<br>");
}
else{
    document.write("vous êtes majeur.<br>");
}