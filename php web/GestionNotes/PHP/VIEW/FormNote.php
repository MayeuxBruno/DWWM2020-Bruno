<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $suiviChoisi = SuiviManager::findById($idRecu);
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
                    echo '<form action="index.php?page=actionNote&mode=ajout" method="POST">';
                break;

                case "modif": 
                    echo '<form action="index.php?page=actionNote&mode=modif" method="POST">
                    <input name="idSuivis"  value="' . $suiviChoisi->getIdSuivis() . '" type="hidden" />';
                break;

                case "suppr":    
                    echo '<form action="index.php?page=actionNote&mode=suppr" method="POST">
                    <input name="idSuivis"  value="' . $suiviChoisi->getIdSuivis() . '" type="hidden" />';
                break;
                
            }
            ?>
            <div>
                <div></div>
                <div><lable for="NomEleve">Eleve:</input></div>
                <div><input type="text" name="NomEleve" value="<?php echo EleveManager::findById($suiviChoisi->getIdEleve())->getNomEleve()." ".EleveManager::findById($suiviChoisi->getIdEleve())->getPrenomEleve(); ?>" disabled/></div>
                <div></div>
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div><lable for="Note">Note:</input></div>
                <div><input type="text" name="Note" value="<?php echo $suiviChoisi->getNote(); ?>"/></div>
                <div></div>
            </div>
            <input type="text" name="idMatiere" value="<?php echo $suiviChoisi->getIdMatiere(); ?>"hidden/>
            <input type="text" name="Coefficient" value="<?php echo $suiviChoisi->getCoefficient(); ?>"hidden/>
            <input type="text" name="idEleve" value="<?php echo $suiviChoisi->getIdEleve(); ?>"hidden/>
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
                <div><button type="reset"><a class="align" href="index.php?page=listeNotes">Retour</button></a></div>
                <div></div>
                
            </div>
        </div>
        <div></div>
        
    </div>
</div>
</div>