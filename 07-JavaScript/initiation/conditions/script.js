//*********************** EXEMPLE 1 **************************/
/*var myVar = 123;
maFonction(); 
function maFonction() 
{ 
    console.log("myVar fonction : "+myVar); 
}
if (myVar > 1) 
{
     console.log("myVar condition : "+myVar);
} 
console.log("myVar fin : "+myVar);*/

//********************* EXEMPLE 2 ***************************/
/*var compteur = 2;
function maFonction() 
{ 
    var myVar = 456; 
    console.log("myVar : "+myVar); 
} 
if (compteur > 1) 
{ 
    let myVar2 = "Wazaa !"; 
    console.log("myVar2 : "+myVar2); 
} */

//maFonction();
/* Ici, myVar n'est pas disponible * car déclarée dans la fonction 
* sa portée ne concerne que le code de la fonction */ 
//console.log("myVar : "+myVar); 

/* Ici, myVar2 n’est pas disponible 
* car déclarée dans le bloc de condition 
* avec une portée uniquement pour ce bloc */ 

//console.log("myVar2 : "+myVar2);

//*********************** EXEMPLE 3 ****************************/
var nom = window.prompt("Entrez votre nom :");
var prenom = window.prompt("Entrez votre prénom :");

if (window.confirm("Etes vous un Homme")==true)
{
    window.alert("Bonjour Monsieur "+nom+" "+prenom+"\n Bienvenue sur notre site!");
}
else
{
    window.alert("Bonjour Madame "+nom+" "+prenom+"\n Bienvenue sur notre site!");
}