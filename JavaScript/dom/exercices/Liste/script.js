function suppDessert(e)
{
    liClique=e.target;
    parent = liClique.parentNode;
    parent.removeChild(liClique);
}

function ajoutDessert()
{
    var nouvLi=document.createElement("li");
    nouvLi.textContent = prompt("Dessert à ajouter :");
    nouvLi.addEventListener("click",suppDessert);
    document.getElementById("desserts").appendChild(nouvLi);
}

var btnAjoutDessert=document.querySelector("button");
btnAjoutDessert.addEventListener("click",ajoutDessert);
/*var bouton=document.getElementById("bouton");
var liste=document.getElementById("liste");
var desserts=document.getElementsByTagName("li");

function ajouter()
{
    /*var dessert=prompt("Entrez le dessert à ajouter :");
    liste.innerHTML+="<li>"+dessert+"</li>";*/

/*}

function supprimer()
{
    liste.childnodes(this);
}

bouton.addEventListener("click",ajouter);
for(let i=0;i<desserts.length;i++){
    dessert[i].addEventListener("click",supprimer);
}*/