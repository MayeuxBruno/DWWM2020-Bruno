<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce4feb7268.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Titre</title>
</head>
<body>
    <div class="colonne">
        <div class="espacehor"></div>
        <div>
            <div></div>
            <div class="colonne">
                <form id="form" action="" method="POST">
                    <fieldset>
                        <legend>Vos Coordonnées</legend>
                        <div class="champs">Les champs ( <span class="rouge">*</span> ) sont obligatoires</div>
                            <div class="champs">
                                <div><label for="nom">Nom:</label></div>
                                <div><input class="checkinput" title="Entrez votre nom de Famille 3 lettres minimum" name="nom" type="text" pattern="[a-zA-Z '-éèàâô]{3,}" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-text"></div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                   <img class="voyant" src="croix.png">
                                </div>
                                <div class="message"></div>
                            </div>
                            <div class="champs">
                                <div><label for="prenom">Prenom:</label></div>
                                <div><input class="checkinput" title="Entrez votre prénom 3 lettres minimum" name="prenom" type="text" pattern="[a-zA-Z '-éèàâô]{3,}" required><div></div></div>
                                <div class="infobulle">
                                <div class="infobulle-text"></div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img class="voyant" src="croix.png">
                                </div>
                                <div class="message"></div>
                            </div>
                            <div class="champs">
                                <div><label for="nom">Mot de Passe :</label></div>
                                <div class="input_icon"><i id="oeil" class="far fa-eye"></i></div>
                                <div><input class="checkinput" title="Entrez votre mot de passe 8 caractères minimum" name="mdp" type="password" pattern="[a-zA-Z0-9]{8,}" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-text"></div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img class="voyant" src="croix.png">
                                </div>
                                <div class="message"></div>
                            </div>
                            <div class="champs">
                                <div><label for="cp">Code Postal:</label></div>
                                <div><input class="checkinput" title="Entrez votre code postal sur 5 chiffres" name="cp" type="text" pattern="\d{5}" maxlength="5" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-text"></div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img class="voyant" src="croix.png">
                                </div>
                                <div class="message"></div>
                            </div>
                            <div class="champs">
                                <div><label for="dateNaissance">Date de Naissance:</label></div>
                                <div><input class="checkinput" title="Entrez votre date de naissance" id="dateNaissance" name="dateNaissance" type="date" pattern="[0123][0-9]{1}[/-]{1}[01][0-9]{1}[/-][0-9]{4}" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-text"></div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img class="voyant" src="croix.png">
                                </div>
                                <div class="message"></div>
                            </div>
                                <div class="champs centre"><input id="submit" type="submit" value="Envoyer" disabled></div>
                    </fieldset>
                </form>
                <div class="centre champs" id="erreur"></div>
            </div>
            <div></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>	