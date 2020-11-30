<?PHP

include 'PHP/outils.php';

spl_autoload_register("ChargerClasse");
DbConnect::init();
session_start();

$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", "Connexion à l'application"],
    "connexion" => ["PHP/VIEW/", "FormConnexion", "Connexion à l'application"],
    "formcreecompte" => ["PHP/VIEW/", "FormCreeCompte", "Création du compte"],
    "actioncompte" => ["PHP/VIEW/", "ActionCompte", "Création du compte"],
    "accueil"=> ["PHP/VIEW/", "PageAccueil", "Bienvenue sur notre site"]
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
