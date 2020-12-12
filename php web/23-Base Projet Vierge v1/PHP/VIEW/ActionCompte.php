<?php
if($_GET['mode']=="suppr")
{
    $utilisateur=UsersManager::findById($_POST['idUser']);
}
else{
    $utilisateur=UsersManager::findByPseudo($_POST['pseudoUser']);
}
switch($_GET['mode'])
{
    // Création d'un compte
    case "ajout":
    case "creer":
        //die (var_dump($_POST));   
        if($utilisateur==FALSE)
        {
            if($_POST['passwordUser']==$_POST['confirmationMdp'])
            {
                $_POST['passwordUser']=crypte($_POST['passwordUser']);
                $utilisateur=new Users($_POST);
                UsersManager::add($utilisateur);
                if($_GET[mode]=="creer")
                {
                    header("Location:index.php?page=connexion");
                }
                else{
                    header("Location:index.php?page=listeUtilisateurs");
                }
            }
            else{
                echo '<h2 class="rouge">La confirmation ne correspond pas au mot de passe</h2>';
                header("refresh:3;url=index.php?page=formCreeCompte");
            }
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?page=formCreeCompte");
        }
    break;

    // Connexion à un compte
    case ("connexion"):
        $passwordCrypte = crypte($_POST['passwordUser']);
        if ($utilisateur!=FALSE)
        {
            if (strcmp($utilisateur->getPasswordUser(),$passwordCrypte)==0)
            {
                $_SESSION['utilisateur']=$utilisateur;
                header("Location:index.php?page=accueil");
            }
            else{
                echo '<h2 class="rouge">Le mot de passe est invalide</h2>';
                header("refresh:3;url=index.php?page=connexion");
            }
        }
        else
        {
            echo '<h2 class="rouge">Le pseudo n\'existe pas</h2>';
            header("refresh:3;url=index.php?page=connexion");
        }
    break;

    //deconnexion
    case ("deconnexion"):
        session_destroy();
        header("Location:index.php?page=connexion");
    break;

    case "suppr":
        UsersManager::delete($utilisateur);
        header("Location:index.php?page=listeUtilisateurs");
    break;
}