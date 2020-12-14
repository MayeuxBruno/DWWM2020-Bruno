<?php
include "head.php";

$hotel=HotelsManager::findById($_GET['id']);
var_dump($hotel);
HotelsManager::delete($hotel);
header("Location:../../index.php");