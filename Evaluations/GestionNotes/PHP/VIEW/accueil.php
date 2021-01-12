<?php
if(isset($_SESSION['utilisateur']))
{
    header("Location:index.php?page=actionCompte&mode=deconnexion");
}
?>
<div class="page">
<div class="titre colonne">
    <div>
        <div></div>
        <div class="colonne">
            <form action="index.php?page=actionCompte&mode=connexion" method="POST">
            <div>
                <div></div>
                <div><lable for="Login">Login :</input></div>
                <div><input type="text" name="Login" value=""></div>
                <div></div>
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div><lable for="MotDePasse">Mot De Passe :</input></div>
                <div><input type="password" name="MotDePasse" value=""></div>
                <div></div>            
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <button type="submit">Valider</button>
                <div></div>
            </div>
            </form>
        </div>
        <div></div>
    </div>
</div>
</div>