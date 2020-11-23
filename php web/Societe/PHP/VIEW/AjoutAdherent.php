<?php

include "Head.php";
AdherentsManager::add(new Adherents($_POST));
header("Location: index.php?code=liste");