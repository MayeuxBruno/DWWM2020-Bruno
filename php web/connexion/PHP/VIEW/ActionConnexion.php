<?php 
$utilisateur=UsersManager::findByPseudo($_POST['pseudoUser']);
$mdp=md5($_POST['passwordUser']);
var_dump($_POST['passwordUser']);
var_dump($utilisateur);
var_dump($mdp);

/*if (!empty($_POST['pseudoUser'])&&!empty($_POST['passwordUser']))
{
    $mdp=md5($_POST['passwordUser']);
    if (strcmp($utilisateur->getPasswordUser(),$mdp)==0)
    {
        session_start();
        $_SESSION['nom']=$utilisateur->getNomUser();
        $_SESSION['prenom']=$utilisateur->getPrenomUser();
        header("Location:index.php?codePage=accueil");    
    }
    else{
        echo '<h2 class="rouge">Pseudo ou Mot de passe invalide</h2>';
        header("refresh:3;url=index.php?codePage=connexion");
    }
}
else
{
    echo '<h2 class="rouge">Veuillez Entrer un pseudo et un mot de passe</h2>';
    header("refresh:3;url=index.php?codePage=connexion");
}*/

