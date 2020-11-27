<?php
    session_start();
echo '<h2>Bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].' Bravo vous etes connecte</h2>';
?>
<div class="center padConex"><button><a href="index.php?codePage=connexion">Deconnexion</a></button></div>