var chaine;
var carac;
var voyelles=0;
chaine=prompt("Veuillez saisir un mot : ");
chaine=chaine.toLowerCase()

for (i=0;i<chaine.length;i++)
{
    carac=chaine.substr(i,1);
    if (carac=="a"||carac=="e"||carac=="i"||carac=="o"||carac=="u"||carac=="y")
    {
        voyelles+=1;
    }
}
document.write("Le mot entré contient "+voyelles+" voyelles");
