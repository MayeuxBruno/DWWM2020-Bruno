var formulaire=document.getElementById("form");
var erreur=document.getElementById("erreur");
var inputs=document.getElementsByTagName("input");
var nom=inputs[0];
var prenom=inputs[1];
var cp=inputs[2];

nom.addEventListener("keyup",function(){
    erreur.textContent="";
    var chaine=nom.value;
    if(!isNaN(chaine[chaine.length-1]))
    {
        nom.value = nom.value.slice(0,-1);
        erreur.textContent="Le nom ne doit pas comporter de chiffres";
    }
});

prenom.addEventListener("keyup",function(){
    erreur.textContent="";
    var chaine=prenom.value;
    if(!isNaN(chaine[chaine.length-1]))
    {
        prenom.value = prenom.value.slice(0,-1);
        erreur.textContent="Le prénom de doit pas comporter de chiffres";
    }
});
 cp.addEventListener("keyup",function(){
    erreur.textContent="";
     if(cp.value.length<5)
     {
        erreur.textContent="La code postal doit comporter 5 chiffres";
     }
     else{
        if(cp.value.length>5){
            cp.value = cp.value.slice(0,-1);
        }
     }
 });