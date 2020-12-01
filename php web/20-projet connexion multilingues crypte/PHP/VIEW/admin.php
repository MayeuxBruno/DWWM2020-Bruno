<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRoleUser()==2)
{
    echo'<h1>Ceci est la page Admin</h1>';
}
else{
    header("url=index.php?codePage=accueil");
}