<?php
switch($_GET['mode'])
{
    case "connexion":
        $utilisateur=UtilisateurManager::getByPseudo($_POST['Login']);
        if ($utilisateur!=FALSE)
        {
            if (strcmp($utilisateur->getMotDePasse(),$_POST['MotDePasse'])==0)
            {
                $_SESSION['utilisateur']=$utilisateur;
                if ($_SESSION['utilisateur']->getRole()==1)
                {
                    header("Location:index.php?page=menuProviseur");
                }
                else
                {
                    header("Location:index.php?page=menuProf");
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

    case "deconnexion":
        session_destroy();
        header("Location:index.php?page=connexion");
        break;

    case "ajout":
        $utilisateur=UtilisateurManager::getByPseudo($_POST['Login']);
        if($utilisateur==false)
        {
            $newUtilisateur= new Utilisateur($_POST);
            var_dump($_POST);
            var_dump($newUtilisateur);
            UtilisateurManager::add($newUtilisateur);
            header("Location:index.php?page=listeEnseignants");
        }
        else{
            echo '<h2 class="alert">Le pseudo existe déjà...</h2>';
            header("refresh:3;url=index.php?page=connexion");
        }
        break;
    
    case "modif":
        $utilisateur=new Utilisateur($_POST);
        UtilisateurManager::update($utilisateur);
        header("Location:index.php?page=listeEnseignants");
        break;

    case "suppr":
        $utilisateur=new Utilisateur($_POST);
        UtilisateurManager::delete($utilisateur);
        header("Location:index.php?page=listeEnseignants");
        break;
        
}
