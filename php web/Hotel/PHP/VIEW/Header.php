<?php
echo'<body class="colonne fondpage">
     <header class="fondheader">
        <div></div>
        <div class="titre justify justifyh"><h1>'.$titre.'</h1></div>';
        
    echo'<div class="justify justifyh colonne">';
           if(isset($_SESSION['utilisateur']))
           {
               echo '<div><h3>'.$_SESSION['utilisateur']->getNomUser().' '.$_SESSION['utilisateur']->getPrenomUser().'</h3></div>
               <div class="justify padForm"><button><a href="index.php?page=actionCompte&mode=deconnexion">'.texte("deconnexion").'</a></button></div>';
           }
    echo'</div>
    </header>';
?>