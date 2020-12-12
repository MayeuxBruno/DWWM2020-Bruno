<?PHP

include 'PHP/outils.php';

spl_autoload_register("ChargerClasse");

Parametres::init();
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


// Gestion des routes
$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", texte("pageConnexion")],
    "connexion" => ["PHP/VIEW/", "FormConnexion", texte("pageConnexion")],
    "formCreeCompte" => ["PHP/VIEW/", "formCreeCompte", texte("creerCompte")],
    "actionCompte" => ["PHP/VIEW/", "ActionCompte", texte("creerCompte")],
    "accueil"=> ["PHP/VIEW/", "PageAccueil",  texte("phraseBienvenue")],
    "listeUtilisateurs"=>["PHP/VIEW/", "ListeUsers",  texte("phraseBienvenue")],
    "formUtilisateurs"=>["PHP/VIEW/", "FormUsers",  texte("phraseBienvenue")],
    "admin"=> ["PHP/VIEW/", "admin", texte("pageAdministrateur")],
    "user"=> ["PHP/VIEW/", "user", texte("pageUtilisateur")]
];

if (isset($_GET["page"]))
{

    $page = $_GET["page"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$page]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$page]);
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
