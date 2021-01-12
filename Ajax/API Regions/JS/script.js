var contenu=document.getElementById("contenu");
const requ = new XMLHttpRequest();
const requ1 = new XMLHttpRequest();

requ.open('GET', '/Ajax/API Regions/Php/Model/ListeRegion.php', true)
requ.send(null);
requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            GenereSelect(reponse);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ1.open('GET', '/Ajax/API Regions/Php/Model/ListeDepartement.php', true);
requ1.send(null);
requ1.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            //console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function GenereSelect($tableau)
{
            select = document.createElement("select");
            select.id="selectRegion";
            option = document.createElement("option1");
            option.setAttribute("value", "test");
            select.appendChild(option);
            contenu.appendChild(select);
            
}