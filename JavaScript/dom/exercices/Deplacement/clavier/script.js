var carre=document.getElementById("carre");
var affiche=document.getElementById("afficheur");

function deplace(dLeft,dTop)
{
    var styleCarre=window.getComputedStyle(carre,null);
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    carre.style.top=parseInt(topActuel)+dTop+"px";
    carre.style.left=parseInt(leftActuel)+dLeft+"px"; 
}
document.addEventListener("keydown",function(evt){
    switch (evt.key)
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
        default:
            alert([evt.key])
    }
});
