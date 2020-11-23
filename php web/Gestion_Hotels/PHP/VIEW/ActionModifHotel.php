<?php
// var_dump($_POST);
$hotel = new Hotels($_POST);
// var_dump($hotel);
HotelsManager::update($hotel);

header("location: index.php?codePage=listeHotel");