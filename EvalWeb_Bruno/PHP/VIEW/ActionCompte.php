<?php
switch($_GET['mode'])
{
    // Création d'un compte ou ajout par l'adminisrateur
    case "ajout":
        $utilisateur=new Utilisateurs($_POST);
        UtilisateursManager::add($utilisateur);
        header("Location:index.php?page=listeEnseignants");
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
        $modifutilisateur=new Utilisateurs($_POST);
        UtilisateursManager::update($modifutilisateur);
        header("Location:index.php?page=listeEnseignants");
    break;
    
    //Suppression d'un compte
    case "suppr":
        $utilisateur=UtilisateursManager::findById($_POST['idUtilisateur']);
        UtilisateursManager::delete($utilisateur);
        header("Location:index.php?page=listeEnseignants");
    break;
}