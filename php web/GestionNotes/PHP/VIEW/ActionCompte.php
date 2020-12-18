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

    case "deconnexion":
        session_destroy();
        header("Location:index.php?page=connexion");
        break;
}