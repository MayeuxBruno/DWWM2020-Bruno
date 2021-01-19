<?php
$idSession=$_POST['idSession'];
$objectif=PeriodesStagesManager::getListBySession($idSession,true);
die(var_dump($objectif));
//echo json_encode($objectif);
?>