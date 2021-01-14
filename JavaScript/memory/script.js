var listeCases=document.getElementsByClassName("case");
var btnSolution=document.getElementById("solution");
var btnReset=document.getElementById("reset");
var affClicks=document.getElementById("nbClick");
var affTime=document.getElementById("temps");
var commencer=document.getElementById("debPartie");
var multi=document.getElementById("multi");
var solo=document.getElementById("solo");
var scoreJ1=document.getElementById("scoreJ1");
var scoreJ2=document.getElementById("scoreJ2");
var tour=document.getElementById("tour");
var memoireRecto=[];
var memoireVerso=[];
var caseRetourne=[];
var joueurs=[];
var scores=[0,0];
var joueur;
var sens=true;
var nbPaires=0;
var nbClicks=0;
affClicks.value="Nombre de Clicks : 0";
var jeu=true;
var myVar;
var delaytour;
var modeJeu;    //0->1Joueur  1->2Joueurs

/******************* Verification des paires ********************/
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
            finJeu(1);
        }
        scores[joueur-1]++;
        AfficheScore();
    }
    else{
        sens=false;
        myVar = setTimeout(retourne, 1000);
    }
    delaytour = setTimeout(tourJoueur(1), 500);
}

/*************** Fonction qui retourne les cartes **********************/
function retourne(e)
{
    if (sens==true)
    {
        e.target.removeEventListener("click",retourne);
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
        e.target.addEventListener("click",retourne);
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

/******** Retourne toutes les cartes *********/
function solution()
{
    finJeu(-1);
    var listeRecto=document.getElementsByClassName("recto");
    var listeVerso=document.getElementsByClassName("verso");;
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

/************** Gestion du début de partie **********/
function AfficheScore()
{
    scoreJ1.value="Score de "+joueurs[0]+" : "+scores[0]+" pts";
    scoreJ2.value="Score de "+joueurs[1]+" : "+scores[1]+" pts";
}
/**************** Gestion du timer ****************/

var timer;
function lancerPartie()
{
    if(modeJeu==0) // Si 1 joueur
    {
        solo.style.display="none";
        multi.style.display="none";
        btnSolution.style.display="flex";
        commencer.style.display="flex";
        affClicks.style.display="flex";
    }
    else
    {
        joueurs.push(prompt("Entrez le nom du premier joueur : "));
        joueurs.push(prompt("Entrez le nom du deuxième joueur : "));
        console.log(joueurs);
        solo.style.display="none";
        multi.style.display="none";
        scoreJ1.style.display="flex";
        scoreJ2.style.display="flex";
        tour.style.display="flex";
        btnSolution.style.display="flex";
        commencer.style.display="flex";
        AfficheScore();
        tourJoueur(0);
    }
    commencer.addEventListener("click",function(){
    for (let i=0;i<listeCases.length;i++)
    {
        listeCases[i].addEventListener("click",retourne);
    }
    timer = setInterval(startTimer, 1000);
    commencer.style.display="none";
    if(modeJeu==0)
    {   
        affTime.style.display="flex";
    }
    else
    {
        tour.style.diplay="flex";
    }
    });
}

var compteur=120;
function startTimer()
{
    if(compteur>=0)
    {
        affTime.value="Il vous reste "+compteur+" secondes";
        compteur--;
    }
    else{
        finJeu(-1);
    }
}
/*************** Gestion de la fin de partie *********************/
function finJeu(vic)
{
    if(modeJeu==0)
    {
        clearInterval(timer);
        if (vic==1)
        {
            affTime.value="Partie Gagnée";
        }
        else
        {
            affTime.value="Partie Perdue";
        }
        btnSolution.style.display="none";
        btnReset.style.display="flex";
        for (let i=0;i<listeCases.length;i++)
        {
            listeCases[i].removeEventListener("click",retourne);
        }
    }
    else
    {
        if(scores[0]==score[1])
        {
            tour.value="Match Nul";
        }
        else
        {
            if(score[0]>score[1])
            {
                tour.value=joueurs[0]+" a gagné";
            }
            else
            {
                tour.value=joueurs[1]+" a gagné";
            }
        }
    }
}
/************** GESTION DES EVENEMENTS *****************/
function tourJoueur(i)
{
    if(i==0)
    {
        joueur=Math.floor(Math.random()*2)+1;
    }
    else
    {
        clearInterval(delaytour);
        joueur++;
        if(joueur==3)
        {
            joueur=1;
        }
    }
    tour.value="c'est a "+joueurs[joueur-1]+" de jouer";
}

btnSolution.addEventListener("click",solution);
btnReset.addEventListener("click",reset);

solo.addEventListener("click",function(){
    modeJeu=0;
    lancerPartie()
})

multi.addEventListener("click",function(){
    modeJeu=1;
    lancerPartie()
})