var nb1=parseInt(prompt("Entrez un nombre :"));
var nb2=parseInt(prompt("Entrez un nombre :"));

function produit(x,y)
{
    return x*y;
}

function afficheImage(image)
{
    document.write("<img src=\""+image+"\" />");
}

document.write("Le produit de "+nb1+" X "+nb2+" est égal à "+(produit(nb1,nb2))+"<br><br>");
afficheImage("En.jpg");