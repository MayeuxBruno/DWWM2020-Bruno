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
            if ($mode!="ajout")
            {
            echo'<div>
                    <div></div>
                    <div><lable for="NomEleve">Eleve:</input></div>
                    <div><input type="text" name="NomEleve" value="'.EleveManager::findById($suiviChoisi->getIdEleve())->getNomEleve()." ".EleveManager::findById($suiviChoisi->getIdEleve())->getPrenomEleve().'" disabled/></div>
                    <input type="text" name="idEleve" value="'.$suiviChoisi->getIdEleve().'"hidden/>
                    <div></div>
                </div>
                <div class="vide"></div>';
            }
            else{
                echo'<div>
                        <div></div>
                        <div><lable for="idEleve">Eleve:</input></div>';
                        $lesEleves=EleveManager::getList();
                        echo'<select name="idEleve">';
                        foreach($lesEleves as $unEleve)
                        {
                            echo'<option value="'.$unEleve->getIdEleve().'">'.$unEleve->getNomEleve().' '.$unEleve->getPrenomEleve().'</option>';
                        }
                        echo'</select>
                        <div></div>
                        </div>
                        <div class="vide"></div>';
            }
            ?>
                <div>
                    <div></div>
                    <div><lable for="Note">Note:</input></div>
                    <div><input type="text" name="Note" <?php if($mode!="ajout"){echo 'value="'.$suiviChoisi->getNote().'"';} if ($mode=="suppr") echo"disabled";?>/></div>
                    <div></div>
                </div>
                <input type="text" name="idMatiere" <?php if($mode!="ajout"){echo 'value="'.$suiviChoisi->getIdMatiere().'"';}else{echo 'value="'.$_SESSION['utilisateur']->getIdMatiere().'"';} ?>hidden/>
                <input type="text" name="Coefficient" <?php if($mode!="ajout"){echo 'value="'.$suiviChoisi->getCoefficient().'"';}else{echo 'value="1"';}?>hidden/>
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

<!--<div><input type="text" name="Note"'.($mode!="ajout")?'value="'.EleveManager::findById($suiviChoisi->getIdEleve())->getNomEleve()." ".EleveManager::findById($suiviChoisi->getIdEleve())->getPrenolEleve().'"':""($mode=="suppr")?"disabled":"" .'/></div>