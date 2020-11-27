<?php 
$utilisateur=UsersManager::findPasswordByPseudo($_POST['pseudoUser']);

if (!empty($_POST['pseudoUser'])&&!empty($_POST['passwordUser']))
{
    $rechPassword=UsersManager::findPasswordByPseudo($pw);
    var_dump($rechPassword);
    if (strcmp($rechPassword['passwordUser'],$_POST['passwordUser'])==0)
    {
        session_start();
        $_SESSION['nom']=$_POST['pseudoUser'];
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
}

