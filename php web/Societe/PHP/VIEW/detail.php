<?php

$musicien=AdherentsManager::getById($_GET['id']);

echo'<div class="espacehor"></div>
<div class="conteneur colonne">

<form action="index.php?code=liste" method="post">
    <div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" value="'.$musicien->getNom().'" />
    </div>
    <div>
        <label for="prenom">Prenom : </label>
        <input type="text" name="prenom" value="'.$musicien->getPrenom().'"/>
    </div>
    <div>
        <label for="pupitre">Pupitre : </label>
        <input type="text" name="pupitre" value="'.$musicien->getPupitre().'"/>
    </div>
    <div>
        <label for="fonction">Fonctio : </label>
        <input type="text" name="fonction" value="'.$musicien->getFonction().'"/>
    </div>
    <div class="espaceh"></div>
    <div>
        <button class="orange" type="submit"><a href="index.php?code=liste">Retour</a></button>
    </div>
</form>
</div>