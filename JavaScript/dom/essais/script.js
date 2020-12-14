var textes = document.getElementsByClassName("texte");
for (let i=0; i<textes.length;i++){
    textes[i].style.fontSize="2em";
    textes[i].style.fontWeigth="bold";
    textes[i].style.color="pink";
    textes[i].addEventListener("click",function(){
        for (let i=0;i<textes.length;i++)
        {
            textes[i].style.color="blue";
        }
    });
}
var articles=document.getElementsByTagName("article");
for (let i=0;i<articles.length;i++)
{
    articles[i].style.color="red";
}
