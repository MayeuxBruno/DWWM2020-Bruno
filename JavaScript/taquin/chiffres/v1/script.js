casePleine=document.getElementsByClassName("plein");
caseVide=document.getElementsByClassName("vide")[0];
afficheur=document.getElementById("affClick");
var nb=[];
var nbClicks=0;
var xc,yc;
var xv,yv;

/*********Remplissage tableau aléatoire *********/
function ArrayRand()
{
    nb= [1, 2, 3, 4, 5, 6, 7, 8];
    nb=nb.map(p => [p, Math.random()]); 
    nb=nb.sort((a, b) => a[1] - b[1]);
    nb=nb.map(p => p[0]);
    for (let i=0;i<casePleine.length;i++)
    {
        casePleine[i].innerHTML = nb[i];
    }
}
/************** Inverse Case *****************/
function inverseCase(evt)
{
    parseInt(xc=evt.target.getAttribute("x"));
    parseInt(yc=evt.target.getAttribute("y"));
    parseInt(xv=caseVide.getAttribute("x"));
    parseInt(yv=caseVide.getAttribute("y"));
    if(((Math.abs(yv-yc)==1)^(Math.abs(xv-xc)==1))&&((Math.abs(yv-yc)<2)&&(Math.abs(xv-xc)<2)))
    {
        caseVide.setAttribute("class","plein");
        evt.target.setAttribute("class","vide");
        caseVide.innerHTML=evt.target.innerHTML;
        evt.target.innerHTML="";
        caseVide=document.getElementsByClassName("vide")[0];
        nbClicks++;
        afficheur.value="Nombre de changements : "+nbClicks;
    }
}
/************* Event Listener  **************/
ArrayRand();
afficheur.value="Nombre de changements : "+nbClicks;
caseVide.addEventListener("click",inverseCase);
for (let i=0;i<casePleine.length;i++)
{
    casePleine[i].addEventListener("click",inverseCase);
}
