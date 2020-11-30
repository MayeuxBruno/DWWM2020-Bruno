<?php
$utilisateur=UsersManager::findByPseudo($_POST['pseudoUser']);
switch($_GET['mode'])
{
    // Création d'un compte
    case ("new"):
        var_dump($_POST);   
        if($utilisateur==FALSE)
        {
            if($_POST['passwordUser']==$_POST['confirmationMdp'])
            {
                $_POST['passwordUser']=crypte($_POST['passwordUser']);
                $utilisateur=new Users($_POST);
                UsersManager::add($utilisateur);
                header("Location:index.php?codePage=connexion");
            }
            else{
                echo '<h2 class="rouge">La confirmation ne correspond pas au mot de passe</h2>';
                header("refresh:3;url=index.php?codePage=formcreecompte");
            }
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?codePage=formcreecompte");
        }
    break;

    // Connexion à un compte
    case ("connect"):
        $passwordCrypte = crypte($_POST['passwordUser']);
        if ($utilisateur!=FALSE)
        {
            if (strcmp($utilisateur->getPasswordUser(),$passwordCrypte)==0)
            {
                $_SESSION['utilisateur']=$utilisateur;
                header("Location:index.php?codePage=accueil");
            }
            else{
                echo '<h2 class="rouge">Le mot de passe est invalide</h2>';
                header("refresh:3;url=index.php?codePage=connexion");
            }
        }
        else
        {
            echo '<h2 class="rouge">Le pseudo n\'existe pas</h2>';
            header("refresh:3;url=index.php?codePage=connexion");
        }
    break;

    //deconnexion
    case ("disconnect"):
        session_destroy();
        header("Location:index.php?codePage=connexion");
    break;
}