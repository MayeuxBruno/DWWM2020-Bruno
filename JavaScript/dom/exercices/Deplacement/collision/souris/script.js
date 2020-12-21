var carre=document.getElementById("carre");

var ecartY,ecartX;
var sourisEnfoncee=false;

function collisionObstacles(posX,posY)
{
    var pasCollision=true;
    var listeObstacles=document.querySelectorAll('.obstacle');
    let i=0;
    while (i<listeObstacles.length)
    {
        pasCollision=pasCollision&&!collisionUnObstacle(listeObstacles[i],posX,posY);
        i++;
    }
    return !pasCollision;
}

function collisionUnObstacle(obstacle,posX,posY)
{
    var styleCarre=window.getComputedStyle(carre);
    var w=parseInt(styleCarre.width);
    var h=parseInt(styleCarre.height);
    var styleObstacle=window.getComputedStyle(obstacle);
    var topOb=parseInt(styleObstacle.top);
    var leftOb=parseInt(styleObstacle.left);
    var widthOb=parseInt(styleObstacle.width);
    var heightOb=parseInt(styleObstacle.height);
    if (posY<leftOb+widthOb && posY+w>leftOb && posX<topOb+heightOb && posX+h >topOb)
    {
        //sourisEnfoncee=false;
        return true;
    }
}

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
        deplaceSouris(evt);
    }
});

function deplaceSouris(evt){
    if (!collisionObstacles(parseInt(evt.clientY)+ecartY,parseInt(evt.clientX)+ecartX))
    {
        carre.style.top=parseInt(evt.clientY)+ecartY+"px";
        carre.style.left=parseInt(evt.clientX)+ecartX+"px";
    }
}
