<?php
$titre="ajout";
include "Head.php";
AdherentsManager::add(new Adherents($_POST));
header("Location:../../index.php");