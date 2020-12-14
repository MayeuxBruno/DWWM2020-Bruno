<?php

?>
<nav class="fondform padForm">
<div>
<div></div>
<div class="space">    
<?php
if (isset($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo'<button><a href="index.php?page=admin">'. texte("administrateur").'</a></button>';
        echo'<button><a href="index.php?page=listeUtilisateurs">'.texte("listeUtilisateurs").'</a></button>';
    }
    echo'<button><a href="index.php?page=listeHotels">Liste des hotels</a></button>';
    echo'<button><a href="index.php?page=listeReservations">Liste des réservations</a></button>';
}
?>
</div>
<div>
<div class="fin"><a href="<?php echo uri();?>lang=FR">FR</a> - <a href="<?php echo uri();?>lang=EN">EN</a></div>
</div>
</nav>