var lesParagraphes=document.getElementsByTagName("p");
var lesTitres=document.getElementsByClassName("titre");
var colorP=0;
var colorT=1;

function couleurP()
{
    if(colorP==0)
    {
        for(let i=0;i<lesParagraphes.length;i++)
        {
            lesParagraphes[i].style.color="red";
        }
        colorP=1;
    }
    else{
        for(let i=0;i<lesParagraphes.length;i++)
        {
            lesParagraphes[i].style.color="black";
        }
        colorP=0;
    }
}

function couleurT()
{
    switch(colorT)
    {
        case 1:
            var color="blue";
            break;
        case 2:
            var color="white";
            break;
        case 3:
            var color="red";
            break;
        case 4:
            var color="black";
            break;
    }
    for(let i=0;i<lesTitres.length;i++)
    {
        lesTitres[i].style.color=color;
    }
    if((colorT%4)==0)
    {
        colorT=1;
    }
    else{
        colorT++;
    }
}

for (let i=0;i<lesParagraphes.length;i++)
{
    lesParagraphes[i].addEventListener("click",couleurP);
}

for (let j=0;j<lesTitres.length;j++)
{
    lesTitres[j].addEventListener("click",couleurT)
}