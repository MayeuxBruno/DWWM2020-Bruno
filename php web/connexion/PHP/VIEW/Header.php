<?php
echo'<body class="colonne fondpage">
     <header class="fondheader">
        <div></div>
        <div class="titre center centerh"><h1>'.$titre.'</h1></div>';
        
    echo'<div class="center centerh colonne">';
           if(isset($_GET['nom'])&&isset($_GET['prenom']))
           {
               echo '<div><h3>'.$_GET['nom'].' '.$_GET['prenom'].'</h3></div>
               <div class="center padConex"><button><a href="index.php?codePage=connexion">Deconnexion</a></button></div>';
           }
    echo'</div>
    </header>';
?>