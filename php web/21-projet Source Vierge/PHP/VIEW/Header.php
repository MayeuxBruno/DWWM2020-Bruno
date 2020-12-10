<?php
echo'<body class="colonne fondpage">
     <header class="fondheader">
        <div></div>
        <div class="titre center centerh"><h1>'.$titre.'</h1></div>';
        
    echo'<div class="center centerh colonne">';
           if(isset($_SESSION['utilisateur']))
           {
               echo '<div><h3>'.$_SESSION['utilisateur']->getNomUser().' '.$_SESSION['utilisateur']->getPrenomUser().'</h3></div>
               <div class="center padConex"><button><a href="index.php?codePage=actioncompte&mode=deconnexion">'.texte("deconnexion").'</a></button></div>';
           }
    echo'</div>
    </header>';
?>