<?php

$musicien=new Adherents($_POST);
AdherentsManager::delete($musicien);
header("Location: index.php?code=liste");