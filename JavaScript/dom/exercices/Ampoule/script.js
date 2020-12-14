var etatAmpoule=0;
function allumer()
{
    if (etatAmpoule==0)
    {
        document.images["ampoule"].src="ampouleOk.gif";
        consigne.textContent="Cliquez sur l'ampoule pour l'éteindre";
        etatAmpoule=1;
    }
    else{
        document.images["ampoule"].src="ampouleHS.gif";
        consigne.textContent="Cliquez sur l'ampoule pour l'allumer";
        etatAmpoule=0;
    }
}
/*var image=document.getElementById("ampoule");
image.addEventListener("click",function(){
   image.src="AmpouleOK.GIF";
   consigne.textContent="Double Cliquez sur l'ampoule pour l'éteindre";
});
image.addEventListener("dblclick",function(){
    image.src="AmpouleHS.GIF";
    consigne.textContent="Cliquez sur l'ampoule pour l'allumer";
});*/