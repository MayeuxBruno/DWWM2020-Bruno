var carre=document.getElementById("carre");
var btUp=document.getElementById("up");

function moveUp()
{
    var x=carre.style.top;
    //carre.style.top=x+"em";
    document.write(x);
}

btUp.addEventListener("click",moveUp);