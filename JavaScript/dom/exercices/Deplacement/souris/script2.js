var carre=document.getElementById("carre");
var sourisEnfoncee=false;

carre.addEventListener("mousedown",function(){
    sourisEnfoncee=true;
});

carre.addEventListener("mouseup",function(){
    sourisEnfoncee=false;
});

document.addEventListener("mousemove",function(evt){
    if(sourisEnfoncee==true)
    {
        carre.style.top=parseInt(evt.clientY)+"px";
        carre.style.left=parseInt(evt.clientX)+"px";
    }
});
