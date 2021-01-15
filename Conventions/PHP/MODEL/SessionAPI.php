<?php
$idForm=$_POST['idForm'];
echo json_encode(SessionformationManager::getByFormation($idForm,true));
?>