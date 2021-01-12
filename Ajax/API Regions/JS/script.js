var select=document.getElementById("selectRegion");
const requ = new XMLHttpRequest();

function chargeDept(event)
{
    console.log(event.target.value);
}

requ.open('GET', '/Ajax/API Regions/index.php?codePage=DepAPI&idReg=12', true);
requ.send(null);
requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue Departement: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

select.addEventListener("change",chargeDept);

