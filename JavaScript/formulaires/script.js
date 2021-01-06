var submit=document.getElementById("submit");
var dateNaissance=document.getElementById("dateNaissance");
var infobulle=document.getElementsByClassName("infobulle-icone");
var texteInfobulle=document.getElementsByClassName("infobulle-texte");
var oeil=document.getElementById("oeil");
var inputs=document.getElementsByClassName("checkinput");
var check={"nom":false,"prenom":false,"mdp":false,"cp":false,"dateNaissance":false};

//Gestion des infos-bulles
for(let i=0;i<infobulle.length;i++)
{
    infobulle[i].addEventListener("mouseover",function(event){
        event.target.parentNode.parentNode.getElementsByClassName("infobulle-text")[0].innerHTML=event.target.parentNode.parentNode.parentNode.querySelector("input").getAttribute("title");
    });
    infobulle[i].addEventListener("mouseout",function(event){
        event.target.parentNode.parentNode.getElementsByClassName("infobulle-text")[0].innerHTML="";
    });
}

for(let i=0;i<inputs.length;i++)
{
    inputs[i].addEventListener("input",verif);
}

function verif(event)
{
    var moninput=event.target;
    var voyant=moninput.parentNode.parentNode.getElementsByClassName("voyant")[0];
    
    var nom=moninput.getAttribute("name");
    
    if(moninput.checkValidity())
    {
        voyant.setAttribute("src","coche.png");
        message(moninput,true);
        check[nom]=true;
    }
    else{
        voyant.setAttribute("src","croix.png");
        message(moninput,false);
        check[nom]=false;
    }
    console.log(check);
    checkResult();
}

function message(input,value)
{
    var message=input.parentNode.parentNode.getElementsByClassName("message")[0];
    switch(value)
    {
        case true:
            message.innerHTML="Saisie valide";
            break;
        
        case false:
            message.innerHTML="Saisie invalide";
            break;
    }
}
dateNaissance.addEventListener("input",function(event){
    var voyant=event.target.parentNode.parentNode.getElementsByClassName("voyant")[0];
    var date = dateNaissance.value;
    var aaaa = date.substring(0,4);
    var mm = date.substring(5,7);
    var jj = date.substring(8,10);
    var dates = new Date(aaaa,mm-1,jj);
    var dateActuelle=new Date();
    if (dates>dateActuelle)
    {
        voyant.setAttribute("src","croix.png");
        check["dateNaissance"]=false; 
    } 
    else
    {
        voyant.setAttribute("src","coche.png");
        check["dateNaissance"]=true; 
    } 
    
    checkResult();
});

function checkResult()
{
    let erreur=false;
    submit.disabled=false; 
    for (var i in check)
    {
        if(check[i]==false)
        {
            erreur=true;
        }
    }
    if(erreur==true)
    {
        submit.disabled=true;
    }
}
oeil.addEventListener("mousedown",function(event){
    event.target.parentNode.parentNode.querySelector("input").setAttribute("type","text");
})
oeil.addEventListener("mouseup",function(event){
    event.target.parentNode.parentNode.querySelector("input").setAttribute("type","password");
})