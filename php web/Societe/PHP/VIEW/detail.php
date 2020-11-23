<?php

$musicien=AdherentsManager::findById($_GET['id']);

echo'<div class="espacehor"></div>
<div class="conteneur colonne">

<form action="index.php?code=liste" method="post">
    <div class="case">
        <label class="case" for="nom">Nom : </label>
        <input class="case" type="text" name="nom" value="'.$musicien->getNom().'" />
    </div>
    <div class="case">
        <label class="case" for="prenom">Prenom : </label>
        <input class="case" type="text" name="prenom" value="'.$musicien->getPrenom().'"/>
    </div>
    <div class="case">
        <label class="case" for="pupitre">Pupitre : </label>
        <input class="case" type="text" name="pupitre" value="'.$musicien->getPupitre().'"/>
    </div>
    <div class="case">
        <label class="case" for="pupitre">Fonction : </label>
        <input class="case" type="text" name="pupitre" value="'.$musicien->getFonction().'"/>
    </div>
    <div class="espaceh"></div>
    <div>
        <button class="orange" type="submit"><a href="index.php?code=liste">Retour</a></button>
    </div>
</form>
</div>';