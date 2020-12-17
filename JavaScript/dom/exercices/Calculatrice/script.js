function clickBtn(e)
{
    let btnClick=e.target.id;
    if (btnClick=="eff")
    {
        afficheur.value=afficheur.value.slice(0,-1);
    }
    else{
        if(btnClick=="=")
        {
            afficheur.value=eval(afficheur.value);
            for (let i=0;i<lesBoutons.length;i++)
            {
            lesBoutons[i].removeEventListener("click",clickBtn);
            }
        }
        else{
            afficheur.value+=btnClick;
        }
    }
}

var afficheur=document.getElementById("afficheur");
var lesBoutons=document.getElementsByTagName("button");
for (let i=0;i<lesBoutons.length;i++)
{
    lesBoutons[i].addEventListener("click",clickBtn);
}
var resetBtn=document.getElementById("cl");
resetBtn.addEventListener("click",function(){
    afficheur.value="";
    for (let i=0;i<lesBoutons.length;i++)
    {
        lesBoutons[i].addEventListener("click",clickBtn);
    }
});


/*var nb=0;
var tot=0;
var op="";

function saisieNombre(valeur)
{
    if (nb==0)
        {
            nb=parseInt(valeur);
        }
        else{
            nb=(nb*10)+parseInt(valeur);
        }
       
}

function clear()
{
    nb=0;
    tot=0;
    op="";
}

function calcul(e)
{
    var afficheur=document.getElementById("afficheur");
    let btnClick=e.target.id;
    
    if (btnClick!="add"&&btnClick!="sous"&&btnClick!="mul"&&btnClick!="div"&&btnClick!="egl")
    {
        saisieNombre(btnClick);
        afficheur.value=nb;
    }
    else{
        if(btnClick!="egl")
        {
            if (tot==0)
            {
                tot=nb;
            }
            op=btnClick;
            nb=0;
        }
    }
    
    if (btnClick=="egl")
    {
       switch(op)
       {
           case "add":
               tot=tot+nb;
            break;
            case "sous":
               tot=tot-nb;
            break;
            case "mul":
               tot=tot*nb;
            break;
            case "div":
               tot=tot/nb;
            break;
       }
       afficheur.value=tot;
    }

    if (btnClick=="cl")
    {
        clear()
        afficheur.value=nb;
    }
}

var lesBoutons=document.getElementsByTagName("button");
for (let i=0;i<lesBoutons.length;i++)
{
    lesBoutons[i].addEventListener("click",calcul);
}*/