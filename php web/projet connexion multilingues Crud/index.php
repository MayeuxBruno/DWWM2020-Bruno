<?PHP

include 'PHP/outils.php';

spl_autoload_register("ChargerClasse");
Parametre::init();
DbConnect::init();
session_start();


/*********** Gestion des langues ************/
// On recupere la langue de l'URL
if (isset($_GET['lang']))
{
    $_SESSION['lang'] = $_GET['lang'];
}

//On prend la langue de la session sinon FR par défaut
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';



$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", texte("pageConnexion")],
    "connexion" => ["PHP/VIEW/", "FormConnexion", texte("pageConnexion")],
    "formcreecompte" => ["PHP/VIEW/", "FormCreeCompte", texte("creerCompte")],
    "actioncompte" => ["PHP/VIEW/", "ActionCompte", texte("creerCompte")],
    "accueil"=> ["PHP/VIEW/", "PageAccueil",  texte("phraseBienvenue")],
    "listevehicules"=>["PHP/VIEW/", "ListeVehicule",  texte("listeVehicule")],    
    "formvehicule"=>["PHP/VIEW/", "FormVehicule", "Formulaire Véhicule"],   
    "actionvehicule"=>["PHP/VIEW/", "actionVehicule", "xx"],
     
    "admin"=> ["PHP/VIEW/", "admin", texte("pageAdministrateur")],
    "user"=> ["PHP/VIEW/", "user", texte("pageUtilisateur")]
];

if (isset($_GET["codePage"]))
{

    $codePage = $_GET["codePage"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$codePage]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$codePage]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}
