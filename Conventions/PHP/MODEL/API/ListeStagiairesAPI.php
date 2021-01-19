<?php
$idSession=$_POST['idSession'];
$lesStagiaires=StagiaireFormationManager::getListBySession($idSession,false);
$lesPeriodes=PeriodesStagesManager::getListBySession($idSession,false);
//$stage[]=StagesManager::getByStagiaire($lesStagiaires[0]->getIdStagiaire(),$lesPeriodes[0]->getIdPeriode());  
//die(var_dump($lesPeriodes[0]->getIdPeriode()));
die(var_dump(StagesManager::getByStagiaire(25,/*,$lesPeriodes[0]->getIdPeriode()*/3)));
//echo json_encode(StagiaireFormationManager::getListBySession($idSession,true));
?>