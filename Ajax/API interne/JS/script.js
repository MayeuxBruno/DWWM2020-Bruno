const requ = new XMLHttpRequest();
var tableau=document.getElementById("crud");
var divCount;  

requ.open('GET', '/Ajax/API interne/Php/Model/Liste.php', true);
requ.send(null);
requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divCount  = document.getElementById("total");
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            GenereTable(reponse);
            divCount.innerHTML=reponse.length;
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function GenereTable(reponse)
{
    for (let i=0;i<reponse.length;i++)
            {
                ligne = document.createElement("tr");
                ligne.setAttribute("class", "crudLigne");
                colonne1 = document.createElement("td");
                colonne1.setAttribute("class", "crudColonne");
                ligne.appendChild(colonne1);
                colonne2 = document.createElement("td");
                colonne2.setAttribute("class", "crudColonne");
                ligne.appendChild(colonne2);
                colonne3 = document.createElement("td");
                colonne3.setAttribute("class", "crudColonne");
                lien1 = document.createElement("a");
                lien1.setAttribute("class", "crudBtn crudBtnEdit");
                colonne3.appendChild(lien1);
                lien2 = document.createElement("a");
                lien2.setAttribute("class", "crudBtn crudBtnModif");
                colonne3.appendChild(lien2);
                lien3 = document.createElement("a");
                lien3.setAttribute("class", "crudBtn crudBtnSuppr");
                colonne3.appendChild(lien3);
                ligne.appendChild(colonne3);
                tableau.appendChild(ligne);
                colonne1.innerHTML = reponse[i].nom;
                colonne2.innerHTML = reponse[i].prenom;
                lien1.innerHTML = "Afficher";
                lien2.innerHTML = "Modifier";
                lien3.innerHTML = "Supprimmer";
            }
            ligne = document.createElement("tr");
            ligne.setAttribute("class", "crudLigne");
            colonne1 = document.createElement("td");
            colonne1.setAttribute("class", "crudColonne");
            ligne.appendChild(colonne1);
            colonne2 = document.createElement("td");
            colonne2.id="total";
            ligne.appendChild(colonne2);
            tableau.appendChild(ligne);
            colonne1.innerHTML = "Total :";
}

requ1.open('GET', '/Ajax/API interne/Php/Model/Count.php', true);
requ1.send(null);
requ1.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    var divCount=divCount= document.getElementById("total");
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            divCount.innerHTML=reponse.nb;
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};