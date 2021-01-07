// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var enregs; // contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            enregs = reponse.records;
            function sortByName(key1, key2){
                return key1.fields.commune > key2.fields.commune;
             }
            enregs=enregs.sort(sortByName);
            console.log(enregs);
            console.log(enregs[0].fields.commune);
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                ville = document.createElement("div");
                ville.setAttribute("class", "ville");
                ligne.appendChild(ville);
                libelle = document.createElement("div");
                libelle.setAttribute("class", "libelle");
                ligne.appendChild(libelle);
                etat = document.createElement("div");
                etat.setAttribute("class", "etat");
                ligne.appendChild(etat);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                ville.innerHTML = enregs[i].fields.commune;
                libelle.innerHTML = enregs[i].fields.nom;
                etat.innerHTML = enregs[i].fields.etat;

                // on ajoute un evenement sur ligne pour afficher le detail
                ligne.addEventListener("click", afficheDetail);
            }
            //console.log("Réponse reçue: %s", this.responseText);
        } else {
            //console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function afficheDetail(e) {
    stationClique = (e.target).parentNode;
    stationClique.removeEventListener("click", afficheDetail);
    detail = document.createElement("div");
    detail.setAttribute("class", "detail");
    detail.setAttribute("ligne", stationClique.getAttribute("id"));
    adresse = document.createElement("div");
    adresse.setAttribute("class", "adresse");
    detail.appendChild(adresse);
    dispo = document.createElement("div");
    dispo.setAttribute("class", "dispo");
    detail.appendChild(dispo);
    nbMax = document.createElement("div");
    nbMax.setAttribute("class", "max");
    detail.appendChild(nbMax);
    adresse.innerHTML = "Adresse : "+enregs[stationClique.id].fields.adresse;
    dispo.innerHTML = "Nombre de vélos disponibles :  "+ enregs[stationClique.id].fields.nbvelosdispo;
    nbMax.innerHTML= "Nombre de places disponibles :  " + enregs[stationClique.id].fields.nbplacesdispo;
    contenu.insertBefore(detail, stationClique.nextSibling);
    detail.addEventListener("click", masqueDetail);
}

function masqueDetail(e)
{
    e.target.parentNode.style.display="none";
    var stationCllique=e.target.parentNode;
    console.log(stationClique);
}

//on envoi la requête
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=60&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion', true);
//req.send(null);
var myVar = setInterval(req.send(null),300000);
