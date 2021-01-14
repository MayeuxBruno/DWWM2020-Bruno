var options=document.getElementsByTagName("option");
for (let i = 0; i < options.length; i++) {
    options[i].addEventListener("mouseenter",function(e) {
        e.preventDefault();
        e.target.style.backgroundColor="red";
    });
    
}

var selects=document.getElementsByTagName("select")[0];
console.log(selects);
var options=selects.getElementsByTagName("option");
for (let i = 0; i < options.length; i++) {
    options[i].addEventListener("click",function(e) {
        e.preventDefault();
        e.target.style.backgroundColor="red";
        console.log(options[i]);
    });  
}