<?php
//fichier pour appel AJAX
include "DepartementsManager.Class.php";
include "../Controller/Parametre.Class.php";
include "../Controller/Departements.Class.php";
include "DbConnect.Class.php";
Parametre::init();
DbConnect::init();
echo json_encode(DepartementsManager::getList());