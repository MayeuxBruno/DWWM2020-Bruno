<?php

var_dump($_POST);
AdherentsManager::add(new Adherents($_POST));
header("Location: index.php?code=liste");