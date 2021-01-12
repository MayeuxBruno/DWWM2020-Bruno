<?php
//fichier pour appel AJAX
$reg=$_POST['idReg'];
echo json_encode(DepartementsManager::getListByRegion($reg));