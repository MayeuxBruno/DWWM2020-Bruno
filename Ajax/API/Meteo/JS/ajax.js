// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
//cle api:appid=4f00f8b80c9b221ffd12e64353e31667
var element=document.getElementsByClassName("case colonne")[0];
var ville="Isbergues";
RecupTemp(ville);

var inputVille=document.querySelector('#choixVille');


function RecupTemp()
{
    // on définit une requete
    const req = new XMLHttpRequest();
    //on envoi la requête
    req.open('GET','https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&appid=4f00f8b80c9b221ffd12e64353e31667&lang=fr&units=metric');
    req.send(null);
    req.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                reponse = JSON.parse(this.responseText);  
                //console.log(reponse);
                let temperature = reponse.main.temp;
                let tempMax=reponse.main.temp_max;
                let tempMin=reponse.main.temp_min;
                let pression=reponse.main.pressure;
                let humidite = reponse.main.humidity;
                let icone=reponse.weather[0].icon;
                RecupHeure(reponse.sys.sunrise);
                RecupHeure(reponse.sys.sunset);
                console.log(reponse);
                let description=reponse.weather[0].description;
                document.querySelector('#icone').setAttribute("src","Images/"+icone+".png");
                document.querySelector('#description').textContent = "Tendance de la journée : "+description;
                document.querySelector('#tempMax').textContent = tempMax+"°C";
                document.querySelector('#tempMin').textContent = tempMin+"°C";
                document.querySelector('#pression').textContent = pression;
                document.querySelector('#afficheTemp').textContent = temperature+"°C";
                document.querySelector('#afficheHumid').textContent = humidite+"%"; 
                document.querySelector('#afficheVille').textContent = ville;           
                //console.log("Réponse reçue: %s", this.responseText);
            } else {
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
                /*document.querySelector('#icone').setAttribute("src","Images/croix.png");
                document.querySelector('#description').textContent = "";
                document.querySelector('#tempMax').textContent = "";
                document.querySelector('#tempMin').textContent = "";
                document.querySelector('#pression').textContent = "";
                document.querySelector('#afficheTemp').textContent = "";
                document.querySelector('#afficheHumid').textContent = ""; 
                document.querySelector('#afficheVille').textContent = "Cette ville n'existe pas."; */
            }
        }
    };
}

function RecupHeure(date)
{
    let timeTemp=new Date(date*1000)
    let heures=timeTemp.getHours();
    if(heures<10){heures="0"+heures}
    let minutes=timeTemp.getMinutes();
    if(minutes<10){minutes="0"+minutes}
    affichage=heures+" h "+minutes+" mns";
    console.log(affichage);
    return affichage;
}

inputVille.addEventListener("change",function(){
    ville=inputVille.value;
    RecupTemp(ville);
});


