<?PHP

include 'PHP/outils.php';

spl_autoload_register("ChargerClasse");
DbConnect::init();
session_start();

/*********** Gestion des langues ************/
if (isset($_GET['lang']))
{
    $_SESSION['lang']=$_GET['lang'];
}
if (isset($_SESSION['lang']))
{
    $lang=$_SESSION['lang'];
}
else
{
    $lang='FR';
}


$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", "Connexion à l'application"],
    "connexion" => ["PHP/VIEW/", "FormConnexion", "Connexion à l'application"],
    "formcreecompte" => ["PHP/VIEW/", "FormCreeCompte", "Création du compte"],
    "actioncompte" => ["PHP/VIEW/", "ActionCompte", "Création du compte"],
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
