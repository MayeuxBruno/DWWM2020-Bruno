<?PHP

function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include $chemin . $nom . '.php';
}

DbConnect::init();

$routes = [
    "default" => ["PHP/VIEW/", "FormConnexion", "Page de connexion"],
    "connexion" => ["PHP/VIEW/", "FormConnexion", "Page de connexion"],
    "formcreecompte" => ["PHP/VIEW/", "FormCreeCompte", "Création de compte"],
    "actioncompte" => ["PHP/VIEW/", "ActionCompte", "Création de compte"],
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
