<?php
    session_start();
echo '<div class="center"><h2>Bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].'</h2></div>';
?>
<div class="center padConex"><button><a href="index.php?codePage=connexion">Deconnexion</a></button></div>