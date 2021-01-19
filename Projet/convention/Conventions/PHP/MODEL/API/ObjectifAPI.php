<?php
$idSession=$_POST['idSession'];
$objectif=SessionformationManager::findById($idSession)->getObjectifPAE();
echo json_encode($objectif);
?>