<?php
$idForm=$_POST['idForm'];
$json=SessionsFormationsManager::getByFormation($idForm,true);
die(var_dump($json));
//echo json_encode();
?>