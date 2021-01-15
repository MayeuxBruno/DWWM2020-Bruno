var select=document.getElementById("select");
select.addEventListener("change",changeFormation);

function changeFormation(e)
{
    console.log(select.value);
}
