<?php

$musicien=AdherentsManager::findById($_GET['id']);
var_dump($musicien);
echo'<div class="espacehor"></div>
<div class="conteneur colonne">
<form action="index.php?code=delete" method="post" value=">
    <div>
        <label for="id">Id : </label>
        <input type="text" name="id" value="'.$musicien->getIdAdherent().'"/>
    </div>
    <div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" value="'.$musicien->getNom().'"/>
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
        <label for="fonction">Fonction : </label>
        <input type="text" name="fonction" value="'.$musicien->getFonction().'" />
    </div>
    <div class="espaceh"></div>
    <div>
        <button class="rouge" type="submit">Supprimer</button>
        <button class="vert" type="reset"><a href="index.php?code=liste">Retour</a></button>
    </div>
</form>
</div>';

?>