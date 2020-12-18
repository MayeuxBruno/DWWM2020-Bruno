var carre=document.getElementById("carre");
var obstacle=document.getElementById("carrefixe");

function deplace(dLeft,dTop)
{
    var styleCarre=window.getComputedStyle(carre,null);
    var styleObstacle=window.getComputedStyle(obstacle,null);
    var topCarreActuel = styleCarre.top;
    var leftCarreActuel = styleCarre.left;
    var heigthCarre=styleCarre.height;
    var widthCarre=styleCarre.width;
    var topObstacle = styleObstacle.top;
    var leftObstacle = styleObstacle.left;
    var heigthObstacle=styleObstacle.height;
    var widthObstacle=styleObstacle.width;
    
    if(topCarreActuel < (topObstacle+widthObstacle)&&
        (topCarreActuel+widthCarre)>topObstacle &&
        leftCarreActuel < (leftObstacle + heigthObstacle) &&
        (heigthCarre+left)>leftObstacle)
    {
        alert("Collision detectee");
    }
    else{
        carre.style.top=parseInt(topActuel)+dTop+"px";
        carre.style.left=parseInt(leftActuel)+dLeft+"px";
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
