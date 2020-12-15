var prixu1=document.getElementById("PrixU1");
var qte1=document.getElementById("Qte1");
var prix1=document.getElementById("Prix1");
var prixu2=document.getElementById("PrixU2");
var qte2=document.getElementById("Qte2");
var prix2=document.getElementById("Prix2");
var total=document.getElementById("Total");

function calcul()
{
        
       prix1.value=prixu1.value*qte1.value;
       prix2.value=prixu2.value*qte2.value;
       total.value=parseInt(prix1.value)+parseInt(prix2.value);
}

var entrees=document.getElementsByTagName("input");
for(let i=0; i<entrees.length;i++)
{
    entrees[i].addEventListener("change",calcul);
}