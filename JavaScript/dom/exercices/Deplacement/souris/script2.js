var afficheur=document.getElementById("aff");
var carre=document.getElementById("carre");
var suivre=document.getElementById("suivre");
var suis=0;

carre.addEventListener("click",function(){
    if (suis==0)
    {
        document.addEventListener("mousemove",blocMove);
        suis=1;
    }
    else{
        document.removeEventListener("mousemove",blocMove);
        suis=0;
    }
});
function blocMove(evt)
{
    carre.style.top=parseInt(evt.screenY)+"px";
    carre.style.left=parseInt(evt.screenX)+"px";
}
