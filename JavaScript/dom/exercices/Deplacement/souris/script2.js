var carre=document.getElementById("carre");
var ecartY,ecartX;
var sourisEnfoncee=false;

carre.addEventListener("mousedown",function(evt){
    ecartY=parseInt(window.getComputedStyle(carre).top)-parseInt(evt.clientY);
    ecartX=parseInt(window.getComputedStyle(carre).left)-parseInt(evt.clientX);
    sourisEnfoncee=true;
});

carre.addEventListener("mouseup",function(){
    sourisEnfoncee=false;
});

document.addEventListener("mousemove",function(evt){
    if(sourisEnfoncee==true)
    {
        carre.style.top=parseInt(evt.clientY)+ecartY+"px";
        carre.style.left=parseInt(evt.clientX)+ecartX+"px";
    }
});
