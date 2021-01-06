var submit=document.getElementById("submit");
var erreur=document.getElementById("erreur");
var inputs=document.getElementsByTagName("input");
var infobulle=document.getElementsByClassName("infobulle-icone");
var texteInfobulle=document.getElementsByClassName("infobulle-texte");
var nom=inputs[0];
var prenom=inputs[1];
var mdp=inputs[2];
var cp=inputs[3];
var dateNaissance=inputs[4];
var nomOk=document.getElementById("nomKo");
var mdpOk=document.getElementById("mdpKo");
var prenomOk=document.getElementById("prenomKo");
var cpOk=document.getElementById("cpKo");
var dateOk=document.getElementById("dateKo");
var oeil=document.getElementById("oeil");
var checkinput=document.getElementsByClassName("checkinput");
var check={"nom":false,"prenom":false,"mdp":false,"cp":false,"dateNaissance":false};

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
nom.addEventListener("keyup",verif);
prenom.addEventListener("keyup",verif);
cp.addEventListener("keyup",verif);
mdp.addEventListener("keyup",verif);

function verif(event)
{
    erreur.textContent="";
    var moninput=event.target;
    var parent=(moninput.parentNode).parentNode;
    var voyant=parent.getElementsByClassName("voyant")[0];
    var nom=moninput.getAttribute("name");
    //console.log(nom);
    
    if(moninput.checkValidity())
    {
        voyant.setAttribute("src","coche.png");
        check[nom]=true;
    }
    else{
        voyant.setAttribute("src","croix.png");
        check[nom]=false;
    }
    console.log(check);
    checkResult();
}

dateNaissance.addEventListener("change",function(){
    erreur.textContent="";
    var date = dateNaissance.value;
    if(checkinput[4].checkValidity()){
        var aaaa = date.substring(0,4);
        var mm = date.substring(5,7);
        var jj = date.substring(8,10);
        var dates = new Date(aaaa,mm-1,jj);
        var dateActuelle=new Date();
        if (dates>dateActuelle)
        {
            erreur.textContent="La date de naissance est incorrecte";
            dateOk.setAttribute("src","croix.png");
            check["dateNaissance"]=false; 
        } 
        else{
            dateOk.setAttribute("src","coche.png");
            check["dateNaissance"]=true; 
        } 
    }
    else{
         dateOk.setAttribute("src","croix.png");
        check["dateNaissance"]=false;
    }
    checkResult();
});

function checkResult()
{
    let erreur=false;
    for (var i in check)
    {
        console.logcheck[i];
    }
    /*let i=0;
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
    }*/
    
}
oeil.addEventListener("mousedown",function(){
    mdp.setAttribute("type","text");
})
oeil.addEventListener("mouseup",function(){
    mdp.setAttribute("type","password");
})