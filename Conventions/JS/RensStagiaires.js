const requ=new XMLHttpRequest();
const requ1=new XMLHttpRequest();
var selectFormation=document.getElementById("selectFormation");
var selectSession=document.getElementById("selectSession");
var btnListe=document.getElementById("Liste");
var selectValue=selectFormation.value;

/*****************LISTENER ******************/
selectFormation.addEventListener("change",changeFormation);
btnListe.addEventListener("click",affichageListe);


requ.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            //console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            ajoutSession(reponse)
        } else {
           // console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ1.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse1 = JSON.parse(this.responseText);
            console.log(reponse1);
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

function affichageListe (e)
{
    if(selectSession.value!="default")
    {
        //console.log(selectSession.value);
        requ1.open('POST', 'index.php?page=ListeStagiairesAPI', true);
        requ1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = selectSession.value;
        var args = "idSession=" + id;
        requ1.send(args);
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

/*********** Gestion Liste Stagiaires *************/




changeFormation();

