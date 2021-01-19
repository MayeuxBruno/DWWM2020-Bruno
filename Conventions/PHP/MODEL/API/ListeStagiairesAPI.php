<?php
$idSession=$_POST['idSession'];
$lesStagiaires=StagiaireFormationManager::getListBySession($idSession,false);
$lesPeriodes=StagiaireFormationManager::getPeriodeBySession($idSession);
foreach($lesStagiaires as $unStagiaire)
{
    $stagiaire=array("id"=>$unStagiaire->getIdStagiaire(),"nom"=>$unStagiaire->getNomStagiaire(),"prenom"=>$unStagiaire->getPrenomStagiaire());
    $i=1;
    foreach($lesPeriodes as $unePeriode)
    {
        $index="periode".$i;
        $etape=StagesManager::getByStagiaire(intval($unStagiaire->getIdStagiaire()),intval($unePeriode['idPeriode']));
        if(!empty($etape))
        {
            $tabetape=array($index=>$etape[0]->getEtape());
        }
        else{
            $tabetape=array($index=>0);
        }
        $stagiaire=$stagiaire+$tabetape;
        $i++;
    }   
    $tab[]=$stagiaire;
   
}
die(var_dump($tab));
//echo json_encode($tab);
?>