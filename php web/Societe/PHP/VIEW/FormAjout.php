<?php
    $titre="Ajout de musicien";
    include "Head.php";
    include "Header.php";
?>
<div class="espacehor"></div>
<div class="conteneur colonne">
<form action="AjoutAdherent.php" method="post">
    <div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" />
    </div>
    <div>
        <label for="prenom">Prenom : </label>
        <input type="text" name="prenom" />
    </div>
    <div>
        <label for="pupitre">Pupitre : </label>
        <input type="text" name="pupitre" />
    </div>
    <div>
        <label for="fonction">Fonctio : </label>
        <input type="text" name="fonction" />
    </div>
    <div class="espaceh"></div>
    <div>
        <button class="vert" type="submit">Ajouter</button>
        <button class="orange" type="submit"><a href="../../index.php">Retour</a></button>
    </div>
</form>
</div>