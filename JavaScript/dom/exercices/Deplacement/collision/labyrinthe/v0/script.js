var carre1=document.getElementById("carre");
var carre2=document.getElementsByClassName("obstacle");
var carre=window.getComputedStyle(carre1);
var afficheur=document.getElementById("afficheur");
var affCollisions=document.getElementById("collisions");
var depart=0;
var nbCollisions=0;
var myVar;
affCollisions.value="Nombre de collisions : "+nbCollisions;
var obstacles=[];
for (let i=0;i<carre2.length;i++)
{
    obstacles[i]=window.getComputedStyle(carre2[i]);
}
var flagCollision=false;

function collision(dLeft,dTop)
{
    let j=0;
    while(j<obstacles.length&&flagCollision==false)
    {
        if(parseInt(carre.left)+parseInt(dLeft) < parseInt(obstacles[j].left)+parseInt(obstacles[j].width)&&
            parseInt(carre.left)+parseInt(dLeft)+parseInt(carre.width)>parseInt(obstacles[j].left) &&
            parseInt(carre.top)+parseInt(dTop) < parseInt(obstacles[j].top)+parseInt(obstacles[j].height) &&
            parseInt(carre.height)+parseInt(carre.top)+parseInt(dTop)>parseInt(obstacles[j].top))
        {
            flagCollision=true;
        }
        else{
            flagCollision=false;
        }
        j++;
    }
}

function deplace(dLeft,dTop)
{
    flagCollision=false;
    collision(dLeft,dTop);
    if(flagCollision==true)
    {
        nbCollisions++;
        affCollisions.value="Nombre de collisions : "+nbCollisions;
        carre1.style.backgroundColor="red";
        console.log(nbCollisions);
    }
    else{
        carre1.style.backgroundColor="lightskyblue";
        carre1.style.top=parseInt(carre.top)+dTop+"px";
        carre1.style.left=parseInt(carre.left)+dLeft+"px";
    }
}
document.addEventListener("keydown",function(evt){
    if (depart==0)
    {
        depart=1;
        myVar = setInterval(myTimer ,1000);
    }
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
 
var myVar = setTimeout(myTimer ,1000);
var temps=60;
function myTimer() {
  temps--;
  if (temps<=0)
  {
    alert("Parite Perdue");
    clearTimeout(myVar);
  }
  afficheur.value="Temps Restant:"+temps;
}