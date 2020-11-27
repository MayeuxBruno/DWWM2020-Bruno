<?php 

$utilisateur=new Users($_POST);

UsersManager::add($utilisateur);
header("Location:index.php?code=connexion");