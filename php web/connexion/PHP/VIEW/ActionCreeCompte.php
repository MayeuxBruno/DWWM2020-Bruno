<?php 

$utilisateur=new Users($_POST);

var_dump($utilisateur);
UsersManager::add($utilisateur);
header("Location:index.php?code=connexion");