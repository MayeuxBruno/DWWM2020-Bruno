var inputs = document.getElementsByClassName("checkValidity");
var submit = document.getElementById("submit");
var nouveau = document.getElementById("nouveau");
var capital = document.getElementById("capital").value;
var taux = document.getElementById("taux").value;
var duree = document.getElementById("duree").value;
var mensualite = document.getElementById("mensualite");
var cout = document.getElementById("cout");

submit.addEventListener("click",function(){
    mensualite.value=capital//(capital * taux/12)/(1-Math.pow(1+taux/12,-duree));
    
});

for(let i=0;i<inputs.length;i++)
{
    inputs[i].addEventListener("input",verif);
}

function verif(event)
{
    var moninput=event.target;
    if(moninput.checkValidity())
    {
       
    }
    else{
        message(moninput,false);
    }
}

function message(input,value)
{
    var message=input.parentNode.parentNode.getElementsByClassName("message")[0];
    switch(value)
    {
        case true:
            message.innerHTML="Format Correcte";
            break;
        
        case false:
            message.innerHTML="Format incorrect";
            break;
    }
}


