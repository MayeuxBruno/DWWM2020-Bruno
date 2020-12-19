<?php
if(isset($_SESSION)&&($_SESSION['utilisateur']->getRole()==1))
{
    $mode = $_GET['mode'];
    if (isset($_GET['id']))  
    {
        $idRecu = $_GET['id'];
        if ($idRecu != false)
        {
            $eleveChoisi = EleveManager::findById($idRecu);
        }
    }
    ?>
    <div class="page">
    <div class="titre colonne">
        <div>
            <div></div>
            <div class="colonne">
            <?php    
            switch ($mode)
                {
                    case "ajout": 
                        echo '<form action="index.php?page=actionEleve&mode=ajout" method="POST">';
                    break;

                    case "modif": 
                        echo '<form action="index.php?page=actionEleve&mode=modif" method="POST">
                        <input name="idEleve"  value="' . $eleveChoisi->getIdEleve() . '" type="hidden" />';
                    break;

                    case "suppr":    
                        echo '<form action="index.php?page=actionEleve&mode=suppr" method="POST">
                        <input name="idEleve"  value="' . $eleveChoisi->getIdEleve() . '" type="hidden" />';
                    break;
                    
                }
                ?>
                <div>
                    <div></div>
                    <div><lable for="NomEleve">Nom:</input></div>
                    <div><input type="text" name="NomEleve"<?php if($mode!="ajout"){echo 'value="'.$eleveChoisi->getNomEleve().'"';} if($mode=="suppr")echo"disabled"; ?>/></div>
                    <div></div>
                </div>
                <div class="vide"></div>
                <div>
                    <div></div>
                    <div><lable for="PrenomEleve">Prénom :</input></div>
                    <div><input type="text" name="PrenomEleve" <?php if($mode!="ajout"){echo 'value="'.$eleveChoisi->getPrenomEleve().'"';} if ($mode=="suppr") echo"disabled";?>/></div>
                    <div></div>            
                </div>
                <div class="vide"></div>
                <div>
                    <div></div>
                    <div><lable for="Classe">Classe :</input></div>
                    <div><input type="text" name="Classe" <?php if($mode!="ajout"){echo 'value="'.$eleveChoisi->getClasse().'"';} if ($mode=="suppr") echo"disabled";?>></div>
                    <div></div>            
                </div>
                <div class="vide"></div>
                <div class="vide"></div>
                <div>
                    <div></div>
                    <div>
                    <?php
                            switch ($mode)
                            {
                            case "ajout":    
                                    echo '    <button type="submit">Ajouter</button>';
                                break;
                            
                                case "modif":   
                                    echo '    <button type="submit">Modifier</button>';
                                break;
                            
                                case "suppr":    
                                    echo '    <button type="submit">Supprimer</button>';
                                break;
                            
                            }
                        ?>
                        </form>
                    </div>
                    <div></div>
                    <div><button type="reset"><a class="align" href="index.php?page=listeEleves">Retour</button></a></div>
                    <div></div>
                    
                </div>
            </div>
            <div></div>
            
        </div>
    </div>
    </div>
<?php
}
else{
    echo '<h2 class="alert">Vous n\'avez pas les droits nécessaire pour accéder à cette page </h2>';
    header("refresh:3;url=index.php?page=connexion");
}