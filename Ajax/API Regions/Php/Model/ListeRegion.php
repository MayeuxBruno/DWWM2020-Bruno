<?php
//fichier pour appel AJAX
include "RegionsManager.Class.php";
include "../Controller/Parametre.Class.php";
include "../Controller/Regions.Class.php";
include "DbConnect.Class.php";
Parametre::init();
DbConnect::init();
echo json_encode(RegionsManager::getList());