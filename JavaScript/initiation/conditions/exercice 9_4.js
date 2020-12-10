var PU = parseInt(prompt("Entrez le prix unitaire du produit :"));
var QTECOM = parseInt(prompt("Entrez la quantité commandée : "));
var TOT = PU * QTECOM;
var PORT,REMISE;

if (TOT > 500)
{
    PORT=0;
}
else{
    PORT=6+TOT*0.02;
}

if (TOT<=100 && TOT>=500)
{
    REMISE=TOT*0.05;
}
else if (TOT>500)
{
    REMISE=TOT*0.1;
}

document.write ("Nombre de produit : "+PU);
document.write ("Quantité de produit : "+QTECOM);
document.write ("Frais de port : "+PORT);
document.write ("Remise : "+REMISE);
