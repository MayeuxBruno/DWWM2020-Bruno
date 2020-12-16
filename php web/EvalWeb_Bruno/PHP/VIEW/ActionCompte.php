<?php
switch($_GET['mode'])
{
    // Création d'un compte ou ajout par l'adminisrateur
    case "ajout":
    case "creer":
        $utilisateur=UtilisateursManager::getByPseudo($_POST['Login']);
        if($utilisateur==FALSE)
        {
            if($_POST['passwordUser']==$_POST['confirmationMdp'])
            {
                $_POST['passwordUser']=crypte($_POST['passwordUser']);
                $utilisateur=new Utilisateurs($_POST);
                UtilisateursManager::add($utilisateur);
                if($_GET['mode']=="creer")
                {
                    header("Location:index.php?page=connexion");
                }
                else{
                    header("Location:index.php?page=listeUtilisateurs");
                }
            }
            else{
                echo '<h2 class="alert">La confirmation ne correspond pas au mot de passe</h2>';
                header("refresh:3;url=index.php?page=formCreeCompte");
            }
        }
        else{
            echo '<h2 class="alert">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?page=formCreeCompte");
        }
    break;

    // Connexion à un compte
    case ("connexion"):
        $utilisateur=UtilisateursManager::getByPseudo($_POST['Login']);
        //$passwordCrypte = crypte($_POST['MotDePasse']);
        var_dump($utilisateur);
        if ($utilisateur!=FALSE)
        {
            if (strcmp($utilisateur->getMotDePasse(),$_POST['MotDePasse'])==0)
            {
                $_SESSION['utilisateur']=$utilisateur;
                if ($_SESSION['utilisateur']->getRole()==1)
                {
                    header("Location:index.php?page=pageProvi");
                }
                else
                {
                    header("Location:index.php?page=pageProf");
                }
            }
            else{
                echo '<h2 class="alert">Le mot de passe est invalide</h2>';
                header("refresh:3;url=index.php?page=connexion");
            }
        }
        else
        {
            echo '<h2 class="alert">Le pseudo n\'existe pas</h2>';
            header("refresh:3;url=index.php?page=connexion");
        }
    break;

    //deconnexion
    case ("deconnexion"):
        session_destroy();
        header("Location:index.php?page=connexion");
    break;

    // Modification d'un compte
    case "modif":
        $utilisateur=UtilisateursManager::findById($_POST['idUser']);

        if ($utilisateur->getMotDePasse()!=$_POST['passwordUser'])
        {
            $_POST['passwordUser']=crypte($_POST['passwordUser']);   
        }
        $modifutilisateur=new Utilisateurs($_POST);
        UtilisateursManager::update($modifutilisateur);
        header("Location:index.php?page=listeUtilisateurs");
    break;
    
    //Suppression d'un compte
    case "suppr":
        $utilisateur=UtilisateursManager::findById($_POST['idUser']);
        UtilisateursManager::delete($utilisateur);
        header("Location:index.php?page=listeUtilisateurs");
    break;
}