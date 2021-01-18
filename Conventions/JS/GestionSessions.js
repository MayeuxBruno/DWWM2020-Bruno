const requ=new XMLHttpRequest();
const requ1=new XMLHttpRequest();
const requ2=new XMLHttpRequest();
var selectFormation=document.getElementById("selectFormation");
var selectSession=document.getElementById("selectSession");
var btnListe=document.getElementById("liste");
var btnObjectif=document.getElementById("objectif");
var affichage=document.getElementById("affichage");
var selectValue=selectFormation.value;
console.log(btnObjectif);

/*****************LISTENER ******************/
selectFormation.addEventListener("change",changeFormation);
btnListe.addEventListener("click",affichageListe);
btnObjectif.addEventListener("click",affichageObjectif);

requ.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            ajoutSession(reponse)
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ1.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse1 = JSON.parse(this.responseText);
            reponse1=reponse1.sort(TriParNom);
            console.log(reponse1);
            creationListe(reponse1);
        }else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ2.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse2 = JSON.parse(this.responseText);
            creationObjectif(reponse2);
            console.log(reponse2)
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

/*********** Gestions Selects **********/
function changeFormation(e)
{
    if(selectFormation.value!="defult")
    {
        if (selectFormation.value != "defaut") // si c'est pas le choix par defaut
        {
            requ.open('POST', 'index.php?page=SessionAPI', true);
            requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var id = selectFormation.value;
            var args = "idForm=" + id;
            requ.send(args);
        }
    }
}
/************** fonctions de tri du tableau ******************/
function TriParNom(a, b) {
    if (a.nomStagiaire<b.nomStagiaire)
    {
       return -1;
    }
    else{
        if (a.nomStagiaire > b.nomStagiaire)
        {
            return 1;
        }
        else{
            if (a.prenomStagiaire<b.prenomStagiaire)
            {
                return -1;
            }
            else{
                if (a.prenomStagiaire>b.prenomStagiaire)
                {
                    return 1;
                }
                else{
                    return 0;
                }
            }
        }
    }
  }


/* Creation du Select Sessions */
function ajoutSession(reponse)
{
    selectSession.innerHTML = "";
    if(reponse.length==0)
    {
        let defaut=document.createElement("option");
        defaut.setAttribute("value","default");
        defaut.innerHTML="Acune Session à afficher";
        selectSession.appendChild(defaut);
    }
    if(reponse.length>1)
    {
        let defaut=document.createElement("option");
        defaut.setAttribute("value","default");
        defaut.innerHTML="Selectionnez une session";
        selectSession.appendChild(defaut);
    }
    for (let i = 0; i < reponse.length; i++) { 
            let session=document.createElement("option");
            session.setAttribute("value",reponse[i].idSessionFormation);
            session.innerHTML=reponse[i].numOffreFormation;
            selectSession.appendChild(session);
    }
}

/**************** Gestion de la liste des stagiaires *********************/
function affichageListe (e)
{
    if(selectSession.value!="default")
    {
        requ1.open('POST', 'index.php?page=ListeStagiairesAPI', true);
        requ1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = selectSession.value;
        var args = "idSession=" + id;
        requ1.send(args);
    }
}

/** Création de la liste des stagiaires **/
function creationListe(liste)
{
    affichage.innerHTML="";
    let div=document.createElement("div");
    let div1=document.createElement("div");
    div1.setAttribute("class","case");
    div1.innerHTML="Nom";
    div.appendChild(div1);
    let div2=document.createElement("div");
    div2.setAttribute("class","case");
    div2.innerHTML="Prenom";
    div.appendChild(div2);
    let div3=document.createElement("div");
    div3.setAttribute("class","case");
    div3.innerHTML="Etat du stage";
    div.appendChild(div3);
    let div4=document.createElement("div");
    div4.setAttribute("class","case");
    div4.innerHTML="";
    div.appendChild(div4);
    affichage.appendChild(div);
    for(let i=0;i<liste.length;i++)
    {
        let div=document.createElement("div");
        div.id=liste[i].idStagiaire;
        div.setAttribute("class","stagiaire");
        let div1=document.createElement("div");
        div1.setAttribute("class","case");
        div1.innerHTML=liste[i].nomStagiaire;
        div.appendChild(div1);
        let div2=document.createElement("div");
        div2.setAttribute("class","case");
        div2.innerHTML=liste[i].prenomStagiaire;
        div.appendChild(div2);
        let div3=document.createElement("div");
        div3.innerHTML="";
        div3.setAttribute("class","case");
        div.appendChild(div3);
        let div4=document.createElement("div");
        div4.setAttribute("class","case");
        div.appendChild(div4);
        affichage.appendChild(div);
    }
}

/**************** Gestion des objectifs de PAE *********************/
function affichageObjectif (e)
{
    if(selectSession.value!="default")
    {
        requ2.open('POST', 'index.php?page=ObjectifAPI', true);
        requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = selectSession.value;
        var args = "idSession=" + id;
        requ2.send(args);
    }
}
function creationObjectif(objectif)
{
    affichage.innerHTML="";
    let div=document.createElement("textarea");
    div.id="textObjectif";
    div.setAttribute("rows","25");
    div.innerHTML=objectif;
    affichage.appendChild(div);
    div=document.createElement("div");
    div.setAttribute("class","espaceHor");
    affichage.appendChild(div);
    div=document.createElement("div");
    let div1=document.createElement("div");
    div1.innerHTML="Retour";
    div1.setAttribute("class","bouton");
    div.appendChild(div1);
    div1=document.createElement("div");
    div.appendChild(div1);
    div1=document.createElement("div");
    div1.innerHTML="Sauvegarder";
    div1.setAttribute("class","bouton");
    div.appendChild(div1);
    affichage.appendChild(div);
}
/*********** Gestion Liste Stagiaires *************/

changeFormation();

