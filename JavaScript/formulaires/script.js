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
var checkinput=document.getElementsByClassName("checkinput");
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
    if(checkinput[0].checkValidity())
    {
        nomOk.setAttribute("src","coche.png");
        check[0]=true;
    }
    else{
        nomOk.setAttribute("src","croix.png");
        check[0]=false;
    }
    checkResult();
});

prenom.addEventListener("keyup",function(){
    erreur.textContent="";
    if(checkinput[1].checkValidity())
    {
        prenomOk.setAttribute("src","coche.png");
        check[1]=true;
    }
    else{
        prenomOk.setAttribute("src","croix.png");
        check[1]=false;
    }
    checkResult();
});

cp.addEventListener("keyup",function(){
    erreur.textContent="";
    if(checkinput[2].checkValidity())
    {
        cpOk.setAttribute("src","coche.png");
        check[2]=true;
    }
    else{
        cpOk.setAttribute("src","croix.png");
        check[2]=false;
    }
    checkResult();
});

dateNaissance.addEventListener("change",function(){
    erreur.textContent="";
    var date = dateNaissance.value;
    if(date.length<=10){
        var aaaa = date.substring(0,4);
        var mm = date.substring(5,7);
        var jj = date.substring(8,10);
        if(jj!="" & mm!="" & aaaa!="")
        {
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
        }
        else{
            dateOk.setAttribute("src","croix.png");
            check[3]=false;
        }
    }
    else{
        dateOk.setAttribute("src","croix.png");
        check[3]=false;
    }
    checkResult();
});

function checkResult()
{
    let erreur=false;
    let i=0;
    console.log(check);
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
        submit.disabled=false;
    }
}