<?PHP

include 'PHP/outils.php';

spl_autoload_register("ChargerClasse");
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

/**
 * Fonction qui ramène le texte dans la bonne langue
 */
function texte($codetexte)
{
    global $lang; //on appel la variable globale
    return TexteManager::findByCodes($lang, $codetexte);
}

$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", texte("pageConnexion")],
    "connexion" => ["PHP/VIEW/", "FormConnexion", texte("pageConnexion")],
    "formcreecompte" => ["PHP/VIEW/", "FormCreeCompte", texte("creerCompte")],
    "actioncompte" => ["PHP/VIEW/", "ActionCompte", texte("creerCompte")],
    "accueil"=> ["PHP/VIEW/", "PageAccueil", "Bienvenue sur notre site"],
    "admin"=> ["PHP/VIEW/", "admin", "Page Administrateur"],
    "user"=> ["PHP/VIEW/", "user", "Page Utilisateur"]
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
