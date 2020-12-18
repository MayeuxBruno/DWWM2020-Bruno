
<?php
echo'<body>
<header class="colonne">
<div>
    <div class="logo">
        <div><img src="IMG/icone.jpg"></div>
        <div></div>
    </div>
    <div class="colonne titre">
        <div class="centre"><h1>Gestion des Notes</h1></div>
        <div class="centre"><h2>'.$titre.'</h2></div>
    </div>
    <div class="colonne">';
    if(isset($_SESSION['utilisateur']))
    {
        echo '  <div></div>
                <div class="centre centreh colonne"><span>'.$_SESSION['utilisateur']->getNomUtilisateur()." ".$_SESSION['utilisateur']->getNomUtilisateur().'</span>
                <span>'.(($_SESSION['utilisateur']->getRole()==1)?"Proviseur":"Professeur").'</span></div>
                <div class="connexion centre">
                   <a href="index.php?page=actionCompte&mode=deconnexion"><button>Deconnectez vous</button></a>
                </div>
                <div></div>';
    }
    else{
       echo ' <div></div>
              <div class="connexion centre">
                <a href="index.php?page=connexion"><button>Connectez vous</button></a>
                </div>
              <div></div>';
    }
    echo'
    </div>
</div>
<div class="bande blanc"></div>
</header>';