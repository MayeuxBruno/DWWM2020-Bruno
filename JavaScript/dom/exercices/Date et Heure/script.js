function afficheDate()
{
    var dt=new Date;
    var txtDate;
    txtDate=((dt.getDate()<10)?"0":"")+dt.getDate()+"/"+
            ((dt.getMonth()<10)?"0":"")+(dt.getMonth()+1)+"/"+
            dt.getFullYear();
            return txtDate;
} 

function afficheHeure()
{
    var dt=new Date;
    var txtHeure;
    txtHeure=((dt.getHours()<10)?"0":"")+dt.getHours()+":"+
            ((dt.getMinutes()<10)?"0":"")+dt.getMinutes()+":"+
            ((dt.getSeconds()<10)?"0":"")+dt.getSeconds();
            return txtHeure;
}