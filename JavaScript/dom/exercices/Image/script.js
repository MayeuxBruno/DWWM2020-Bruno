//L'image se retourne à chaque click
/*var image=document.getElementById("image");
var verso=0;
function retourneImage()
{
    if (verso==0){
        image.src="2.jpg";
        verso=1;
    }
    else
    {
        image.src="plage.jpg"
        verso=0;
    }

}*/

// L'image se retourne lors du click puis 3 secondes plus tard
var image=document.getElementById("image");

function retourneImage()
{
    image.src="2.jpg";
    setTimeout(function(){image.src="plage.jpg";}, 3000);    
}

image.addEventListener("click",retourneImage);
