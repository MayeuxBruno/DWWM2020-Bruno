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
    


    "pageProvi"=> ["PHP/VIEW/", "PageProvi", "Menu Proviseur"],
    "pageProf"=> ["PHP/VIEW/", "PageProf", "Menu Professeur"],
    "listeEleves"=>["PHP/VIEW/", "ListeEleve", "Gestion des élèves"],
    "formEleve"=>["PHP/VIEW/", "FormEleve", "Gestion des élèves"],
    "actionEleve"=>["PHP/VIEW/", "ActionEleve", "Gestion des élèves"],
    "listeEnseignants"=>["PHP/VIEW/", "ListeEnseignants", "Gestion des enseignants"],
    "formEnseignants"=>["PHP/VIEW/", "FormEnseignant", "Gestion des enseignats"],
    "actionCompte" => ["PHP/VIEW/", "ActionCompte", ""],
    "listeMatieres"=>["PHP/VIEW/", "ListeMatieres", "Gestion des Matieres"],
    "formMatieres"=>["PHP/VIEW/", "FormMatiere", "Gestion des Matieres"],
    "actionMatiere" => ["PHP/VIEW/", "ActionMatieres", ""],
    "listeNotes"=>["PHP/VIEW/", "ListeNotes", "Gestion des notes"],
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
