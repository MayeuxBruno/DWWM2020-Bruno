var listeCases=document.getElementsByClassName("case");
var memoireRecto=[];
var memoireVerso=[];
var caseRetourne=[];
var sens=true;
var nbPaires=0;
var myVar;

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
            alert("Partie Gangnée");
        }
    }
    else{
        sens=false;
        myVar = setTimeout(retourne, 2000);
    }
}

function retourne(e)
{
    if (sens==true)
    {
        console.log(e.target.parentNode);
        if(memoireRecto.length<2)
        {
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

for (let i=0;i<listeCases.length;i++)
{
    listeCases[i].addEventListener("click",retourne);
}