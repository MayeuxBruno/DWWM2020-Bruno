var carre=document.getElementById("carre");
var btUp=document.getElementById("up");
var btDown=document.getElementById("down");
var btLeft=document.getElementById("left");
var btRight=document.getElementById("right");

function deplace (dLeft,dTop)
{
    var styleCarre=window.getComputedStyle(carre,null);
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    carre.style.top=parseInt(topActuel)+dTop+"px";
    carre.style.left=parseInt(leftActuel)+dLeft+"px"; 
}

btUp.addEventListener("click",function(){
    deplace(0,-5);
});
btDown.addEventListener("click",function(){
    deplace(0,5);
});
btLeft.addEventListener("click",function(){
    deplace(-5,0);
});
btRight.addEventListener("click",function(){
    deplace(5,0);
});

/*var carre=document.getElementById("carre");
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

function blocMove(evt)
{
    var
}
btUp.addEventListener("click",moveUp);
btDown.addEventListener("click",moveDown);
btLeft.addEventListener("click",moveLeft);
btRight.addEventListener("click",moveRight);
bloc.addEventListener("mousemove",blocMove);*/