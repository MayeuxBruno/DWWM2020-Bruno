<?php

$musicien=new Adherents($_POST);
AdherentsManager::update($musicien);
header("Location: index.php?code=liste");