var afficheTemps=document.getElementById("afficheur");
var afficheCollisions=document.getElementById("collisions");
var afficheResultat=document.getElementById("resultat");
var depart=document.getElementById("debPartie");
var rejouer=document.getElementById("rejouer");
var score=document.getElementById("score");
var cmpscore=0;
init();

/***************** Gesyion des déplacements *****************/
function deplace(dx, dy) {
    var deplacement_ok = true;
    var styleArrivee = window.getComputedStyle(document.getElementById('arrivee'), null);
    var ta = parseInt(styleArrivee.top);
    var la = parseInt(styleArrivee.left);
    var wa = parseInt(styleArrivee.width);
    var ha = parseInt(styleArrivee.height);
    var styleCarre = window.getComputedStyle(document.getElementById('carre'), null);
    var t = parseInt(styleCarre.top);
    var l = parseInt(styleCarre.left);
    var w = parseInt(styleCarre.width);
    var h = parseInt(styleCarre.height);

    var listeObs = document.querySelectorAll('.obstacle');
    let isCollision=false;
    let i=0;
    while(i<listeObs.length&&isCollision==false)
    {
        var typeObstacle=listeObs[i].getAttribute("type");
        var styleObst = window.getComputedStyle(listeObs[i], null);
        var tob = parseInt(styleObst.top);
        var lob = parseInt(styleObst.left);
        var wob = parseInt(styleObst.width);
        var hob = parseInt(styleObst.height);
        if (!depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h)) {
            switch(typeObstacle)
            {
                case "mur":
                    isCollision=true;
                    compteurCollision ++;
                    var audio = new Audio('sons/boing.mp3');
                    audio.play();
                    afficheCollisions.value="Nombre de collisions : "+compteurCollision;
                    cmpscore-=50;
                    score.value="Votre Score est de  :"+cmpscore+"Pts";
                    if(cmpscore<0)
                    {
                        finJeu(-1);
                    }
                    carre.style.backgroundColor="red";
                break;

                case "bonus":
                    if (listeObs[i].style.display!="none")
                    {
                        isCollision=true;
                        listeObs[i].style.display="none";
                        var point=parseInt(listeObs[i].getAttribute("points"));
                        cmpscore+=point;
                        score.value="Votre Score est de  :"+cmpscore+"Pts";
                        var audio = new Audio('sons/piece.mp3');
                        audio.play();
                    }
                    document.getElementById('carre').style.top = t + dy + 'px';
                    document.getElementById('carre').style.left = l + dx + 'px';
                    break;

                case "fin":
                    isCollision=true;
                    document.getElementById('carre').style.left = l - 5 + 'px';
                    document.getElementById('carre').style.top = t  +10  + 'px';
                    finJeu(1);
                    break;
            }
        }
        deplacement_ok = deplacement_ok && depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h);
        i++;
    }
    if (deplacement_ok) {
        carre.style.backgroundColor="lightskyblue";
        document.getElementById('carre').style.top = t + dy + 'px';
        document.getElementById('carre').style.left = l + dx + 'px';
        var deplFin=depl_ok(ta,la,wa/2,ha,t,l,w,h); //Si on est dans la zone d'arrivée
    }
}

function depl_ok(tob, lob, wob, hob, t, l, w, h) {
    if (l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
        return false
    }
    return true;
}

var ecartY, ecartX; // repère le décalage entre le coin suprieur du carré et la souris
var carre = document.getElementById('carre');
var flagMouv = false;
var compteurCollision = 0;

carre.addEventListener("mousedown", (e) => {
    // on repere l'ecart entre la souris et le haut du carré, pourgarder cet ecart pendant le déplacement
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    // on autorise le déplacement
    flagMouv = true;
});

document.addEventListener("mousemove", (e) => {
    // on déplace si le mouvement est autorisé
    if (flagMouv == true) {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) => {
    //on interdit le deplacement
    flagMouv = false;
});

//avec les touches du clavier

window.addEventListener("keydown", function (event) {

    if(depart==1)
    {
        switch (event.key) {
            case "ArrowDown":
                deplace(0, 5);
                break;
            case "ArrowUp":
                deplace(0, -5);
                break;
            case "ArrowLeft":
                deplace(-5, 0);
                break;
            case "ArrowRight":
                deplace(5, 0);
        }
    }

});

function deplaceSouris(e) {
    if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        // if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        // on deplace le carré en fonction de la position de la souris et de l'ecart du départ
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};
//Gestion des collisions
/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'obstacle
 * @param {*} obstacle //obstacle fixe
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionUnObstacle(obstacle, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var tob = parseInt(styleObstacle.top);
    var lob = parseInt(styleObstacle.left);
    var wob = parseInt(styleObstacle.width);
    var hob = parseInt(styleObstacle.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        console.log("collision n°" + compteurCollision + "  " + obstacle.id);
        flagMouv = false;
        compteurCollision++;
        return true;
    }
    return false;
}

/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'un des obstacles
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionObstacles(posX, posY) {
    var pasCollision = true;
    var listeObstacles = document.querySelectorAll('.obstacle');
    //on teste pour chacun des obstacles
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}

/*********** Gestion du timer ****************/
var depart=0;
var timer;
debPartie.addEventListener("click",function(){
    timer = setInterval(startTimer, 1000);
    if (depart==0)
    {
        var audio = new Audio('sons/musique.mp3');
        audio.play();
        compteur=90;
        depart=1;
    }
});
var compteur;
function startTimer()
{
    
    if (compteur==0)
    {
        afficheTemps.value = "Temps écoulé !";
        depart=0;
        finJeu(-1);
    }
    else
    {
        afficheTemps.value="Il vous reste "+compteur+" secondes";
        compteur--;
    }
}

/***************** Reinitialisation de la partie *******************/
function init()
{
    depart=0;
    cmpscore=0;
    compteur=90;
    compteurCollision=0;
    afficheTemps.value="Il vous reste "+compteur+" secondes";
    afficheCollisions.value="Nombre de collisions : "+compteurCollision;
    score.value="Votre Score est de  : 0 Pts";
    let pion=document.getElementById("carre");
    pion.style.backgroundColor="lightskyblue";
    pion.style.left="17px";
    pion.style.top="18px";
    afficheResultat.value="";
    rejouer.style.display="none";
    var listeBonus = document.querySelectorAll('.obstacle');
    for(let j=0;j<listeBonus.length;j++)
    {
        listeBonus[j].style.display="block";
    }
    
}

/*************** Gestion de la fin de partie *********************/
function finJeu(vic)
{
    clearInterval(timer);
    rejouer.style.display="block";
    rejouer.addEventListener("click",init);
    if (vic==1)
    {
        afficheResultat.value="Bravo vous avez gagné...";
        var audio = new Audio('sons/gagne.mp3');
        audio.play();
    }
    else
    {
        afficheResultat.value="Dommage vous avez perdu...";
        var audio = new Audio('sons/perdu.mp3');
        audio.play();
    }
}
