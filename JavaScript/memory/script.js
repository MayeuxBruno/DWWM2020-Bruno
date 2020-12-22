var listeCases=document.getElementsByClassName("case");
var btnSolution=document.getElementById("solution");
var btnReset=document.getElementById("reset");
var affClicks=document.getElementById("nbClick");
var affTime=document.getElementById("temps");
var commencer=document.getElementById("debPartie");
var memoireRecto=[];
var memoireVerso=[];
var caseRetourne=[];
var sens=true;
var nbPaires=0;
var nbClicks=0;
affClicks.value="Nombre de clicks : "+nbClicks;
var jeu=true;
var myVar;
var temp;
function verifPaire()
{
    if(memoireVerso[0].getAttribute("src")==memoireVerso[1].getAttribute("src"))
    {
        
        caseRetourne[0].removeEventListener("click",retourne);
        caseRetourne[1].removeEventListener("click",retourne);
        memoireRecto=[];
        memoireVerso=[];
        caseRetourne=[];
        nbPaires++;
        console.log("Nombre de paires : "+nbPaires);
        if(nbPaires==8)
        {
             temp=setTimeout(finJeu(1),3000);
        }
    }
    else{
        sens=false;
        myVar = setTimeout(retourne, 1000);
    }
}

function retourne(e)
{
    if (sens==true)
    {
        if(memoireRecto.length<2)
        {
            nbClicks++;
            affClicks.value="Nombre de clicks : "+nbClicks;
            carte=e.target.parentNode.getElementsByClassName("verso")[0];
            carte.style.display="flex";
            e.target.style.display="none";
            memoireVerso.push(carte);
            memoireRecto.push(e.target);
            caseRetourne.push(e.target.parentNode);
            console.log(memoireRecto.length);
        }
        if(memoireRecto.length==2)
        {
            verifPaire();
        }
    }
    else
    {   
        clearTimeout(myVar);
        memoireRecto[0].style.display="flex";
        memoireRecto[1].style.display="flex";
        memoireVerso[0].style.display="none";
        memoireVerso[1].style.display="none";
        memoireRecto=[];
        memoireVerso=[];
        caseRetourne=[];
        sens=true;
    }
}

function solution()
{
    for (let i=0;i<listeCases.length;i++)
    {
        listeCases[i].removeEventListener("click",retourne);
    }
    var listeRecto=document.getElementsByClassName("recto");
    var listeVerso=document.getElementsByClassName("verso");
    console.log("solution demandée");
    for (let i=0;i<listeRecto.length;i++)
    {
        listeRecto[i].style.display="none";
        listeVerso[i].style.display="flex";
    }
    btnSolution.style.display="none";
    btnReset.style.display="flex";
}

/************ RESET DE LA PAGE *******************/
function reset()
{
    window.location.reload();
}

/**************** Gestion du timer ****************/
var timer;
commencer.addEventListener("click",function(){
    timer = setInterval(startTimer, 1000);
});
var compteur=120;
var delay;
function startTimer()
{
    if(compteur>=0)
    {
        console.log(compteur);
        affTime.value="Il vous reste "+compteur+" secondes";
        compteur--;
    }
    else{
        delay=setInterval(finJeu(-1),1000);
    }
}

/*************** Gestion de la fin de partie *********************/
function finJeu(vic)
{
    clearInterval(delay);
    clearTimeout(temp);
    clearInterval(timer);
    if (vic==1)
    {
        alert("Bravo vous avez gagné...");
    }
    else
    {
        alert("Dommage vous avez perdu...");
    }
}
/************** GESTION DES EVENEMENTS *****************/
for (let i=0;i<listeCases.length;i++)
{
    listeCases[i].addEventListener("click",retourne);
}
btnSolution.addEventListener("click",solution);
btnReset.addEventListener("click",reset);
