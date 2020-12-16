<?php
echo'<body class="colonne fondpage">
     <header class="fondheader">
     <div>
     <div class="padLogo">
        <div><img src="IMG/icone.jpg" alt="logo"></div>
        <div></div>
        <div></div>
     </div>
     <div class="colonne">
        <div class="justify justifyh"><h1>Gestion des notes</h1></div>
        <div class="titre justify justifyh"><h1>'.$titre.'</h1></div>
    </div>
    <div class="colonne justify justifyh">';
    if(isset($_SESSION['utilisateur']))
    {
        echo '<div><h3>'.$_SESSION['utilisateur']->getNomUtilisateur().' '.$_SESSION['utilisateur']->getPrenomUtilisateur().'</h3></div>';
        echo '<div><h3>'.(($_SESSION['utilisateur']->getRole()=="1")?"Proviseur":"Professeur").'</div>';
        echo'<div class="justify padForm"><button><a href="index.php?page=actionCompte&mode=deconnexion">Deconnexion</a></button></div>';
    }else{
        
        echo'<p><button>Connectez Vous</button></p>';
    }
        echo'</div>
    </div>
    </div>';
    echo '</header>';
?>