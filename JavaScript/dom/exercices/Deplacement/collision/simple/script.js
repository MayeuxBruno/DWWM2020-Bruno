var carre1=document.getElementById("carre");
var carre2=document.getElementById("carrefixe");
var carre=window.getComputedStyle(carre1);
var obstacle=window.getComputedStyle(carre2);
var flagCollision=false;

function collision(dLeft,dTop)
{
    if(parseInt(carre.left)+parseInt(dLeft*2) < parseInt(obstacle.left)+parseInt(obstacle.width)&&
        parseInt(carre.left)+parseInt(dLeft*2)+parseInt(carre.width)>parseInt(obstacle.left) &&
        parseInt(carre.top)+parseInt(dTop*2) < parseInt(obstacle.top)+parseInt(obstacle.height) &&
        parseInt(carre.height)+parseInt(carre.top)+parseInt(dTop*2)>parseInt(obstacle.top))
    {
        flagCollision=true;
        carre2.style.backgroundColor="red";
    }
    else{
        flagCollision=false;
        carre2.style.backgroundColor="green";
    }

}
function deplace(dLeft,dTop)
{
    collision(dLeft,dTop);
    if(flagCollision==true)
    {
        console.log("Collision detectee");
    }
    else{
        carre1.style.top=parseInt(carre.top)+dTop+"px";
        carre1.style.left=parseInt(carre.left)+dLeft+"px";
        console.log(carre.left+" "+carre.top+" "+carre.height+" "+carre.width);
        console.log(obstacle.left+" "+obstacle.top+" "+obstacle.height+" "+obstacle.width);
        
        
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
