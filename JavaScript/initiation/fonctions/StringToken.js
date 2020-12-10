var chaine1;
var chaine2;
var n;

function strtok(str1,str2,n)
{
    let index=0;
    let indexfin;
    for(i=1;i<n;i++)
    {
        index=str1.indexOf(str2,index+1);
    }
    
    if((indexfin=str1.indexOf(str2,index+1))==-1)
    {
        document.write(str1.substr(index+1,str1.length-1));
    }
    else{
        (index==0)?index=index:index=index+1;
        document.write(str1.substr(index,((indexfin)-index)));
    }
    
   
}

chaine1 ="robert;dupont;amiens;80000";
chaine2=";";
n = parseInt(prompt("entrez le numéro du mot à extraire (de 1 à 4): "));
strtok(chaine1,chaine2,n);
