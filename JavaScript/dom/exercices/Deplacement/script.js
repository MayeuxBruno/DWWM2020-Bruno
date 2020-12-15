var carre=document.getElementById("carre");
var btUp=document.getElementById("up");
var btDown=document.getElementById("down");
var btLeft=document.getElementById("left");
var btRight=document.getElementById("right");
var x=10;
var y=10;

function moveUp()
{
    x-=1;
    carre.style.top=x+"em";
}

function moveDown()
{
    x+=1;
    carre.style.top=x+"em";
}

function moveLeft()
{
    y-=1;
    carre.style.left=y+"em";
}

function moveRight()
{
    y+=1;
    carre.style.left=y+"em";
}

btUp.addEventListener("click",moveUp);
btDown.addEventListener("click",moveDown);
btLeft.addEventListener("click",moveLeft);
btRight.addEventListener("click",moveRight);