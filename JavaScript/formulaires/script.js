var formulaire=document.getElementById("form");
var erreur=document.getElementById("erreur");
var inputs=document.getElementsByTagName("input");
var nom=inputs[0];
var prenom=inputs[1];
var cp=inputs[2];
var dateNaissance=inputs[3];
var nomOk=document.getElementById("nomKo");
var prenomOk=document.getElementById("prenomKo");
var cpOk=document.getElementById("cpKo");
var dateOk=document.getElementById("dateKo");

nom.addEventListener("keyup",function(){
    erreur.textContent="";
    var chaine=nom.value;
    var code=chaine.charCodeAt(chaine.length-1)
    console.log(code);
    if(!((code<97||code>122)^(code<64||code>90)))
    {
        if(code!=45&&code!=39&&code!=32)
        {
            nomOk.setAttribute("src","croix.png");
            nom.value = nom.value.slice(0,-1);
            erreur.textContent="Ce caractère n'est pas accepte";
        }
        else{
            nomOk.setAttribute("src","coche.png");    
        }
    }
    else{
        nomOk.setAttribute("src","coche.png");
    }
    if(chaine.length==0)
    {
        nomOk.setAttribute("src","croix.png");
    }
});

prenom.addEventListener("keyup",function(){
    erreur.textContent="";
    var chaine=prenom.value;
    var code=chaine.charCodeAt(chaine.length-1)
    console.log(code);
    if(!((code<97||code>188)^(code<64||code>90)))
    {
        if(code!=45&&code!=39&&code!=32)
        {
            prenomOk.setAttribute("src","croix.png");
            prenom.value = prenom.value.slice(0,-1);
            erreur.textContent="Ce caractère n'est pas accepte";
        }
        else{
            prenomOk.setAttribute("src","coche.png");    
        }
    }
    else{
        prenomOk.setAttribute("src","coche.png");
    }
    if(chaine.length==0)
    {
        prenomOk.setAttribute("src","croix.png");
    }
});

cp.addEventListener("keyup",function(){
    erreur.textContent="";
    var chaine=cp.value;
    console.log(cp.value.length);
     if(cp.value.length<5)
     {
         if (isNaN(chaine[chaine.length-1]))
         {
            cp.value = cp.value.slice(0,-1);
         }
        erreur.textContent="La code postal doit comporter 5 chiffres";
        cpOk.setAttribute("src","croix.png");
     }
     else{
        if(cp.value.length>5){
            cp.value = cp.value.slice(0,-1);
        }

     }
     if(cp.value.length==5)
     {
        cpOk.setAttribute("src","coche.png");
     }
});

dateNaissance.addEventListener("change",function(){
    erreur.textContent="";
	var date = dateNaissance.value;
    var aaaa = date.substring(0,4);
    var mm = date.substring(5,7);
    var jj = date.substring(8,10);
    var dates = new Date(aaaa,mm-1,jj);
    var dateActuelle=new Date();
    if (dates>dateActuelle)
    {
        erreur.textContent="La date de naissance est incorrecte";
        dateOk.setAttribute("src","croix.png");
    } 
    else{
        dateOk.setAttribute("src","coche.png");
    } 
});