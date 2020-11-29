<?php
$utilisateur=UsersManager::findByPseudo($_POST['pseudoUser']);
switch($_GET['mode'])
{
    case ("new"):
        if($utilisateur==FALSE)
        {
            $_POST['passwordUser']=md5($_POST['passwordUser']);
            $utilisateur=new Users($_POST);
            UsersManager::add($utilisateur);
            header("Location:index.php?codePage=connexion");
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?codePage=formcreecompte");
        }
    break;

    case ("connect"):
        //$utilisateur=UsersManager::findByPseudo($_POST['pseudoUser']);
        $passwordCrypte = md5($_POST['passwordUser']);
        if (!empty($_POST['pseudoUser'])&&!empty($_POST['passwordUser']))
        {
            if (strcmp($utilisateur->getPasswordUser(),$passwordCrypte)==0)
            {
                session_start();
                $nom=$_SESSION['nom']=$utilisateur->getNomUser();
                $prenom=$_SESSION['prenom']=$utilisateur->getPrenomUser();
                header("Location:index.php?codePage=accueil&nom=$nom&prenom=$prenom");
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
        }
    break;
}