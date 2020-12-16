<?PHP

include 'PHP/outils.php';

spl_autoload_register("ChargerClasse");

Parametres::init();
DbConnect::init();

session_start();



// Gestion des routes
$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", "Connexion"],
    "connexion" => ["PHP/VIEW/", "FormConnexion", ""],
    "actionCompte" => ["PHP/VIEW/", "ActionCompte", ""],
    "accueil"=> ["PHP/VIEW/", "PageAccueil", ""],
    "listeUtilisateurs"=>["PHP/VIEW/", "ListeUsers", ""],
    "formUtilisateurs"=>["PHP/VIEW/", "FormUsers", ""],
    "admin"=> ["PHP/VIEW/", "admin", ""],
    "user"=> ["PHP/VIEW/", "user", ""],


    "pageProvi"=> ["PHP/VIEW/", "PageProvi", "Menu Proviseur"],
    "pageProf"=> ["PHP/VIEW/", "PageProf", "Menu Professeur"],
    /**** Test Manager ***/
    "testutilisateurs"=> ["PHP/TESTMANAGER/","testBruno", ""]
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
