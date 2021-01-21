const requ=new XMLHttpRequest();
const requ1=new XMLHttpRequest();
const requ2=new XMLHttpRequest();
const requ3=new XMLHttpRequest();
var selectFormation=document.getElementById("selectFormation");
var selectSession=document.getElementById("selectSession");
var btnListe=document.getElementById("liste");
var btnObjectif=document.getElementById("objectif");
var affichage=document.getElementById("affichage");
var selectValue=selectFormation.value;

/*****************LISTENER ******************/
selectFormation.addEventListener("change",changeFormation);
btnListe.addEventListener("click",affichageListe);
btnObjectif.addEventListener("click",affichageObjectif);
selectSession.addEventListener("change",function(){
    affichage.innerHTML="";
});

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
            reponse1.fields=reponse1.fields.sort(TriParNom);
            creationListe(reponse1);
        }else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ2.onreadystatechange = function (event) { //Requete GetObjectifAPI
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse2 = JSON.parse(this.responseText);
            creationObjectif(reponse2);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ3.onreadystatechange = function (event) { //Requete SetObjectifAPI
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

/*********** Gestions Selects **********/
function changeFormation(e)
{
    if(selectFormation.value!="default")
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
function TriParNom(a, b) { //Tri la liste des stagiaires par ordre Alphabétique
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
    else{
        if(reponse.length>1) // Si nombre de sessions>1
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
function formDate(date)
{
    let temp=new Date (date);
    let Jours=temp.getDate();
    let Mois=temp.getMonth();
    if (Jours<10){Jours="0"+Jours};
    if (Mois<10){Mois="0"+Mois};
    return(Jours+"/"+Mois+"/"+temp.getFullYear());
}

/** Création de la liste des stagiaires **/
function creationListe(liste)
{
    let tabStagiaires=liste.fields;
    let nbPeriodes=liste.nbPeriodes;
    console.log(nbPeriodes);
    
    affichage.innerHTML="";
    let div=document.createElement("div");
    let div1=document.createElement("div");
    div1.setAttribute("class","titreColonne centerItem");
    div1.innerHTML="Nom";
    div.appendChild(div1);
    let div2=document.createElement("div");
    div2.setAttribute("class","titreColonne centerItem");
    div2.innerHTML="Prenom";
    div.appendChild(div2);

    for (let i = 0; i < liste.nbPeriodes; i++) {
        let div3=document.createElement("div");
        div3.setAttribute("class","titreColonne");
        div3.innerHTML=formDate(liste['dateDebut'+i])+"<br>"+formDate(liste['dateFin'+i]);
        formDate(liste['dateDebut'+i]);
        div.appendChild(div3);   
    }

    affichage.appendChild(div);

    for(let i=0;i<tabStagiaires.length;i++)
    {
        let div=document.createElement("div");
        div.id=0;
        div.setAttribute("class","stagiaire");
        let div1=document.createElement("div");
        div1.setAttribute("class","case");
        div1.innerHTML=tabStagiaires[i]['nomStagiaire'];
        div.appendChild(div1);
        let div2=document.createElement("div");
        div2.setAttribute("class","case");
        div2.innerHTML=tabStagiaires[i]['prenomStagiaire'];
        div.appendChild(div2);
        for (let j = 0; j < liste.nbPeriodes; j++) {
            let div3=document.createElement("div");
            div3.setAttribute("class","case");
            div.appendChild(div3);   
            if(tabStagiaires[i].etape[j]!=".")
            {
                div3.innerHTML=tabStagiaires[i].etape[j];
            }
        }
        affichage.appendChild(div);
    }
}

/**************** Gestion des objectifs de PAE *********************/
function affichageObjectif (e)
{
    if(selectSession.value!="default")
    {
        requ2.open('POST', 'index.php?page=GetObjectifAPI', true);
        requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = selectSession.value;
        var args = "idSession=" + id;
        requ2.send(args);
    }
}

function sauvegardeObj(e) //Action quand on clique sur le bouton Sauvegarde
{
    box=e.target.parentNode.parentNode;
    e.target.disabled=true;
    let idPeriode=box.id;
    let txtObjectif=box.getElementsByTagName("textarea")[0].value;
    requ3.open('POST', 'index.php?page=SetObjectifAPI', true);
    requ3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var args = "id="+idPeriode+"&text="+txtObjectif;
    requ3.send(args);
}

function modifChamp(e) //Action quand il y a un changement dans les inputs
{
    let zone=e.target.parentNode;
    zone.getElementsByTagName("button")[0].disabled=false;
}

function creationObjectif(reponse) //Creation de l'affichage des differentes périodes en Entreprise
{
    affichage.innerHTML="";
    let nbPeriodes=reponse.nbPeriodes;
    let tabPeriodes=reponse.fields;
    for(let i=0;i<nbPeriodes;i++)
    {
        // Creation de la case
        let div=document.createElement("div");
        div.id=tabPeriodes[i]['idPeriode'];
        div.setAttribute("class","case colonne");
        // Creation du titre
        let titre=document.createElement("div");
        titre.innerHTML="Objectif pour la période du "+formDate(tabPeriodes[i]['dateDebutPAE'])+" au "+formDate(tabPeriodes[i]['dateFinPAE']);
        div.appendChild(titre);
        // Div Vide
        let vide=document.createElement("div");
        vide.setAttribute("class","espaceHor");
        div.appendChild(vide);
        // Creation du textArea
        let divText=document.createElement("textarea");
        divText.id="textObjectif";
        divText.setAttribute("rows","15");
        divText.innerHTML=tabPeriodes[i]['objectifPAE'];
        div.appendChild(divText);
        affichage.appendChild(div);
        // Div Vide
        let vide2=document.createElement("div");
        vide2.setAttribute("class","espaceHor");
        div.appendChild(vide2);
        // Creation du bouton de sauvegarde
        let bouton=document.createElement("div");
        let b2=document.createElement("button");
        b2.setAttribute("class","bouton sauvegarde");
        b2.disabled=true;
        b2.textContent="Sauvegarder";
        bouton.appendChild(b2);
        div.appendChild(bouton);
        // Div Vide
        let vide3=document.createElement("div");
        vide3.setAttribute("class","espaceHor");
        div.appendChild(vide3);
        
        let icone=document.createElement("i");
        icone.setAttribute("class","fa fa-floppy-o");
        icone.setAttribute("aria-hidden","");
        div.appendChild(icone);

        // Div interligne
        let inter=document.createElement("div");
        inter.setAttribute("class","espaceHor");
        affichage.appendChild(inter);
    }
    var btnSauve=document.getElementsByClassName("sauvegarde");
    for (let k = 0; k < btnSauve.length; k++) {
        btnSauve[k].addEventListener("click",sauvegardeObj);
    }
    var txt=document.getElementsByTagName("textarea");
    for (let k = 0; k < txt.length; k++) {
        txt[k].addEventListener("input",modifChamp);
    }
}
changeFormation();

