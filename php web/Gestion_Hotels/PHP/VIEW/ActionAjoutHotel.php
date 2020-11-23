<?php
// var_dump($_POST);
$hotel = new Hotels($_POST);
// var_dump($hotel);
HotelsManager::add($hotel);

header("location: index.php?codePage=listeHotel");