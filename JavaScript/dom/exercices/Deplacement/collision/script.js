var carre1=document.getElementById("carre");
var carre2=document.getElementById("carrefixe");
//var carre = {x:parseInt(window.getComputedStyle(carre1).left),y:parseInt(window.getComputedStyle(carre1).top),width:parseInt(window.getComputedStyle(carre1).width),height:parseInt(window.getComputedStyle(carre1).height)}
//var obstacle = {x:parseInt(window.getComputedStyle(carre2).left),y:parseInt(window.getComputedStyle(carre2).top),width:parseInt(window.getComputedStyle(carre2).width),height:parseInt(window.getComputedStyle(carre2).height)}
var carre = {x:parseInt(carre1.style.left),y:parseInt(carre1.style.top),width:parseInt(carre1.style.width),height:parseInt(carre1.style.height)}
var obstacle = {x:parseInt(carre2.style.left),y:parseInt(carre2.style.top),width:parseInt(carre2.style.width),height:parseInt(carre2.style.height)}

function deplace(dLeft,dTop)
{
    if(carre.x < obstacle.x+obstacle.width&&
        carre.x+carre.width>obstacle.x &&
        carre.y < obstacle.y+obstacle.height &&
        carre.height+carre.y>obstacle.y)
    {
        alert("Collision detectee");
    }
    else{
        carre1.style.top=parseInt(window.getComputedStyle(carre1).top)+dTop+"px";
        carre1.style.left=parseInt(window.getComputedStyle(carre1).left)+dLeft+"px";
    } 
}
document.addEventListener("keydown",function(evt){
    switch (evt.code)
    {
        case "ArrowUp":
                deplace(0,-5);
            break;

        case "ArrowDown":
                deplace(0,5);
            break;
        
        case "ArrowRight":
               deplace(5,0);
            break;

        case "ArrowLeft":
               deplace(-5,0);
        break;
    }
});
