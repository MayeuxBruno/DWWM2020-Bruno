<?php
echo'<body class="colonne fondpage">
     <header class="fondheader">
        <div></div>
        <div class="titre center centerh"><h1>'.$titre.'</h1></div>';
        
    echo'<div class="center centerh colonne">';
           if(isset($_SESSION['nom'])&&isset($_SESSION['nom']))
           {
               echo '<div><h3>'.$_SESSION['nom'].' '.$_SESSION['prenom'].'</h3></div>
               <div class="center padConex"><button><a href="index.php?codePage=actioncompte&mode=disconnect">Deconnexion</a></button></div>';
           }
    echo'</div>
    </header>';
?>