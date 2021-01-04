var submit=document.getElementById("submit");
var erreur=document.getElementById("erreur");
var inputs=document.getElementsByTagName("input");
var infobulle=document.getElementsByClassName("infobulle-icone");
var texteInfobulle=document.getElementsByClassName("infobulle-texte");
var nom=inputs[0];
var prenom=inputs[1];
var cp=inputs[2];
var dateNaissance=inputs[3];
var nomOk=document.getElementById("nomKo");
var prenomOk=document.getElementById("prenomKo");
var cpOk=document.getElementById("cpKo");
var dateOk=document.getElementById("dateKo");
var check=[false,false,false,false];

//Gestion des infos-bulles
for(let i=0;i<infobulle.length;i++)
{
    infobulle[i].addEventListener("mouseover",function(){
        texteInfobulle[i].style.display="block";
    });
    infobulle[i].addEventListener("mouseout",function(){
        texteInfobulle[i].style.display="none";
    });
}

nom.addEventListener("keyup",function(){
    
    erreur.textContent="";
    var chaine=nom.value;
    var code=chaine.charCodeAt(chaine.length-1)
    if(!((code<97||code>122)^(code<64||code>90)))
    {
        if(code!=45&&code!=39&&code!=32)
        {
            nomOk.setAttribute("src","croix.png");
            check[0]=false;
            nom.value = nom.value.slice(0,-1);
            erreur.textContent="Ce caractère n'est pas accepte";
        }
        else{
            nomOk.setAttribute("src","coche.png");   
            check[0]=true; 
        }
    }
    else{
        nomOk.setAttribute("src","coche.png");
        check[0]=true; 
    }
    if(chaine.length==0)
    {
        nomOk.setAttribute("src","croix.png");
        check[0]=false;
    }
    checkResult();
    console.log(check);
});

prenom.addEventListener("keyup",function(){
    erreur.textContent="";
    var chaine=prenom.value;
    var code=chaine.charCodeAt(chaine.length-1)
    if(!((code<97||code>188)^(code<64||code>90)))
    {
        if(code!=45&&code!=39&&code!=32)
        {
            prenomOk.setAttribute("src","croix.png");
            check[1]=false; 
            prenom.value = prenom.value.slice(0,-1);
            erreur.textContent="Ce caractère n'est pas accepte";
        }
        else{
            prenomOk.setAttribute("src","coche.png"); 
            check[1]=true;    
        }
    }
    else{
        prenomOk.setAttribute("src","coche.png");
        check[1]=true; 
    }
    if(chaine.length==0)
    {
        prenomOk.setAttribute("src","croix.png");
        check[1]=false; 
    }
    checkResult();
    console.log(check);
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
        check[2]=false; 
     }
     else{
        if(cp.value.length>5){
            cp.value = cp.value.slice(0,-1);
        }

     }
     if(cp.value.length==5)
     {
        cpOk.setAttribute("src","coche.png");
        check[2]=true; 
     }
     checkResult();
     console.log(check);
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
        check[3]=false; 
    } 
    else{
        dateOk.setAttribute("src","coche.png");
        check[3]=true; 
    } 
    checkResult();
    console.log(check);
});

function checkResult()
{
    let erreur=false;
    let i=0;
    while(i<check.length&&erreur==false)
    {
        if(check[i]==false)
        {
            erreur=true;
            submit.disabled=true;
        }
        i++;
    }
    if(erreur==false)
    {
        console.log("check");
        submit.disabled=false;
    }
}