<?php
$idSession=$_POST['idSession'];
$lesStagiaires=StagiaireFormationManager::getListBySession($idSession,false);
$lesPeriodes=PeriodesStagesManager::getListBySession($idSession,false);
foreach($lesStagiaires as $unStagiaire)
{
    $stage=StagesManager::getByStagiaire($unStagiaire->,$idPeriode)
}
die(var_dump($lesPeriodes));
//echo json_encode(StagiaireFormationManager::getListBySession($idSession,true));
?>