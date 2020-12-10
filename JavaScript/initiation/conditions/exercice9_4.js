var PU = parseInt(prompt("Entrez le prix unitaire du produit :"));
var QTECOM = parseInt(prompt("Entrez la quantité commandée : "));
var TOT = PU * QTECOM;
var PORT,REMISE=0;

if (TOT <= 500)
{
    PORT=6+TOT*0.02;
}

if (TOT>=100 && TOT<=200)
{
    REMISE=TOT*0.05;
}
else if (TOT>200)
{
    REMISE=TOT*0.1;
}

document.write ("Nombre de produit : "+PU+"<br>");
document.write ("Quantité de produit : "+QTECOM+"<br>");
document.write ("Frais de port : "+PORT+"<br>");
document.write ("Remise : "+REMISE+"<br>");
document.write ("Prix à payer : "+(TOT+PORT-REMISE)+"<br>");
