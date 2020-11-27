<?php 

$utilisateur=new Users($_POST);
var_dump($utilisateur);

$rechPassword=UsersManager::findPasswordByPseudo($utilisateur->getPseudoUser());
var_dump($rechPassword);
//UsersManager::add($utilisateur);
//header("Location:index.php?code=connexion");