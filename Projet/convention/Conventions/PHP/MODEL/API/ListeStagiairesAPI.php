<?php
$idSession=$_POST['idSession'];
$tabStagiaires=[];
$lesStagiaires=ParticipationManager::getByIdSession($idSession,false);
foreach ($lesStagiaires as $unStagiaire)
{
    $tabStagiaires[]=StagiairesManager::findById($unStagiaire->getIdStagiaire(),true);
}
echo json_encode($tabStagiaires);
?>