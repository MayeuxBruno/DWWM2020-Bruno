<?php
//fichier pour appel AJAX
$reg=$GET['idReg'];
echo json_encode(DepartementsManager::getListByRegion(32));