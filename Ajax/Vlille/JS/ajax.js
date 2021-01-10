// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var champVille=document.getElementById("ville");
var champVelodis=document.getElementById("vdispo");
var champPlacesdis=document.getElementById("pdispo");
var champStations=document.getElementById("station");
var nav=document.getElementById("nav");
var selectV=document.getElementById("selectVille");
var btnTest=document.getElementById("btnTest");
var contenu=document.getElementById("divContenu");
var enregs; // contient la reponse de l'API
var tabVille;//contient la liste des villes de la mel
// on définit une requete
const req = new XMLHttpRequest();
var sousTitre=document.getElementById("divSousTitre");
var dateMaj;
var creSelect=0;


/************** fonctions de tri du tableau ******************/
function TriParVilles(a, b) {
    if (a.fields.commune<b.fields.commune)
    {
       return -1;
    }
    else{
        if (a.fields.commune > b.fields.commune)
        {
            return 1;
        }
        else{
            if (a.fields.nom<b.fields.nom)
            {
                return -1;
            }
            else{
                if (a.fields.nom>b.fields.nom)
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

function TriParStation(a,b)
{
    if (a.fields.nom<b.fields.nom)
    {
       return -1;
    }
    else{
        if (a.fields.nom > b.fields.nom)
        {
            return 1;
        }
        else{
            if (a.fields.commune<b.fields.commune)
            {
                return -1;
            }
            else{
                if (a.fields.commune>b.fields.commune)
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

function TriParVelo(a, b) {
    if (a.fields.nbvelosdispo<b.fields.nbvelosdispo)
    {
       return -1;
    }
    else{
        if (a.fields.nbvelosdispo > b.fields.nbvelosdispo)
        {
            return 1;
        }
        else{
            if (a.fields.nom<b.fields.nom)
            {
                return -1;
            }
            else{
                if (a.fields.nom>b.fields.nom)
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

function TriParPlaces(a, b) {
    if (a.fields.nbplacesdispo<b.fields.nbplacesdispo)
    {
       return -1;
    }
    else{
        if (a.fields.nbplacesdispo > b.fields.nbplacesdispo)
        {
            return 1;
        }
        else{
            if (a.fields.nom<b.fields.nom)
            {
                return -1;
            }
            else{
                if (a.fields.nom>b.fields.nom)
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

//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            tabVille=reponse.facet_groups[2].facets;// Récupère la liste des villes
            enregs = reponse.records;
            enregs=enregs.sort(TriParVilles);
            console.log("je passe");
            dateMaj=DateMaj(new Date(enregs[0].record_timestamp));
            sousTitre.textContent="Dernière Mise à jours : "+dateMaj;
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                check = document.createElement("div");
                check.setAttribute("class", "check");
                ligne.appendChild(check);
                icone = document.createElement("img");
                if(enregs[i].fields.etat=="HORS SERVICE"||enregs[i].fields.etat=="EN MAINTENANCE")
                {
                    icone.setAttribute("src", "Images/croix.png");
                }
                else
                {
                    icone.setAttribute("src", "Images/coche.png");
                }
                check.appendChild(icone);
                ville = document.createElement("div");
                ville.setAttribute("class", "ville");
                ligne.appendChild(ville);
                libelle = document.createElement("div");
                libelle.setAttribute("class", "libelle");
                ligne.appendChild(libelle);
                vdispo = document.createElement("div");
                vdispo.setAttribute("class", "vdispo");
                ligne.appendChild(vdispo);
                pdispo = document.createElement("div");
                pdispo.setAttribute("class", "pdispo");
                ligne.appendChild(pdispo);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                ville.innerHTML = enregs[i].fields.commune;
                libelle.innerHTML = enregs[i].fields.nom;
                vdispo.innerHTML = enregs[i].fields.nbvelosdispo;
                pdispo.innerHTML = enregs[i].fields.nbplacesdispo;
            }
            if(creSelect==0)
            {
                createSelect(tabVille);
                creSelect=1;
            }
            //console.log("Réponse reçue: %s", this.responseText);
        } else {
            //console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

/************ Mise à jours de l'affichage ***********/
function majListe()
{
    var lesLignes=contenu.getElementsByClassName("ligne");
    console.log(enregs);
    for(let k=0;k<lesLignes.length;k++)
    {
        if(enregs[k].fields.etat=="HORS SERVICE"||enregs[k].fields.etat=="EN MAINTENANCE")
        {
            lesLignes[k].getElementsByTagName("img")[0].setAttribute("src", "Images/croix.png");
        }
        else
        {
            lesLignes[k].getElementsByTagName("img")[0].setAttribute("src", "Images/coche.png");
        }
        lesLignes[k].getElementsByClassName("ville")[0].innerHTML=enregs[k].fields.commune;
        lesLignes[k].getElementsByClassName("libelle")[0].innerHTML=enregs[k].fields.nom;
        lesLignes[k].getElementsByClassName("vdispo")[0].innerHTML=enregs[k].fields.nbvelosdispo;
        lesLignes[k].getElementsByClassName("pdispo")[0].innerHTML=enregs[k].fields.nbplacesdispo;
    }
}

function DateMaj(date)
{
    let dateTemp=date.getDate()+"/";
    let mois=date.getMonth()+1;
    if(mois<10){mois="0"+mois}
    dateTemp+=mois+"/"+ date.getFullYear()+" à ";
    let heures=date.getHours();
    if(heures<10){heures="0"+heures}
    let minutes=date.getMinutes();
    if(minutes<10){minutes="0"+minutes}
    dateTemp+=heures+" h "+minutes+" mns";
    return dateTemp;
}

/******* Affiche le select de la barre de menu *********/  
function createSelect(tab)
{
     /*select = document.createElement("select");
     select.setAttribute("class", "select");
     select.id = "selectVille";*/
     option = document.createElement("option");
     //option.setAttribute("class", "vdispo");
     option.setAttribute("value"," ");
     option.textContent = "Toute la Métroplole";
     selectV.appendChild(option);
     for(let j=0;j<tab.length;j++)
     {
         option = document.createElement("option");
         //option.setAttribute("class", "vdispo");
         option.setAttribute("value", "&refine.commune="+tab[j].path);
         option.textContent = tab[j].path;
         selectV.appendChild(option);
     }
     //nav.appendChild(select);
}



//on envoi la requête
//req.send(null);
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=250&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&timezone=Europe%2FParis', true);
req.send(null);

/*********** Events Listeners ******/
champVelodis.addEventListener("click",function(){
    enregs=enregs.sort(TriParVelo);
    majListe();
})
champStations.addEventListener("click",function(){
    enregs=enregs.sort(TriParStation);
    majListe();
})
champPlacesdis.addEventListener("click",function(){
    enregs=enregs.sort(TriParPlaces);
    majListe();
})
champVille.addEventListener("click",function(){
    enregs=enregs.sort(TriParVilles);
    majListe();
})
selectV.addEventListener("change",function(event){
    contenu.innerHTML="";
    var value=event.target.value;
    req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=250'+value+'&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&timezone=Europe%2FParis', true);
    req.send(null);
});
