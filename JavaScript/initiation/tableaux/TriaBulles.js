var table=Array(1,5,63,45,12,99,150,120,110,7,36,45,71,3,9);
var passage=0;
var permut=true;
var temp;

while (permut)
{
    permut=false;
    for (var i=0;i<(table.length)-1;i++)
    {
        if(table[i]>table[i+1])
        {
            temp=table[i];
            table[i]=table[i+1];
            table[i+1]=temp;
            permut=true;
        } 
    }
}
document.write(table+"<br>");   

