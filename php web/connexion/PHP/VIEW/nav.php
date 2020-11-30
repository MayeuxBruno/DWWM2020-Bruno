<?php
if (isset($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo'<button><a href="index.php?codePage=admin">Administrateur</a></button>';
    }
    echo'<button><a href="index.php?codePage=user">Utilisateur</a></button>';
}