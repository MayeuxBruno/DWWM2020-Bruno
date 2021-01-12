var select=document.getElementById("selectRegion");
var listeDep=document.getElementsByClassName("listeDep")[0];
const requ = new XMLHttpRequest();

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue Departement: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            listeDep.innerHTML="";
            for (let i=0;i<reponse.length;i++)
            {
                ajoutDepartement(reponse[i].LibelleDepartement,reponse[i].idDepartement);
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};
select.addEventListener("change",changeRegion);

function changeRegion(event)
{
    if (select.value!="default")
    {
        requ.open('POST','index.php?codePage=DepAPI',true);
        requ.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        var id=select.value;
        var args="idReg="+id;
        requ.send(args);
    }
}

function ajoutDepartement(libDepart, idDepart)
{
    let dept=document.createElement("div");
    dept.setAttribute("class","unDept");
    dept.setAttribute("id",idDepart);
    dept.innerHTML=libDepart;
    listeDep.appendChild(dept);
}
requ.open('GET', '/Ajax/API Regions/index.php?codePage=DepAPI&idReg=12', true);
requ.send(null);


