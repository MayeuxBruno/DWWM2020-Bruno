<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $utilisateurChoisi = UtilisateurManager::findById($idRecu);
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
                    echo '<form action="index.php?page=actionCompte&mode=ajout" method="POST">';
                break;

                case "modif": 
                    echo '<form action="index.php?page=actionCompte&mode=modif" method="POST">
                    <input name="idUtilisateur"  value="' . $utilisateurChoisi->getIdUtilisateur() . '" type="hidden" />';
                break;

                case "suppr":    
                    echo '<form action="index.php?page=actionCompte&mode=suppr" method="POST">
                    <input name="idUtilisateur"  value="' . $utilisateurChoisi->getIdUtilisateur() . '" type="hidden" />';
                break;
                
            }
            ?>
            <div>
                <div></div>
                <div><label for="Login">Pseudo:</label></div>
                <div><input type="text" name="Login"<?php if($mode!="ajout"){echo 'value="'.$utilisateurChoisi->getLogin().'"';} if($mode=="suppr")echo"disabled"; ?>/></div>
                <div></div>
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div><label for="NomUtilisateur">Nom :</label></div>
                <div><input type="text" name="NomUtilisateur" <?php if($mode!="ajout"){echo 'value="'.$utilisateurChoisi->getNomUtilisateur().'"';} if ($mode=="suppr") echo"disabled";?>/></div>
                <div></div>            
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div><label for="PrenomUtilisateur">Prenom :</label></div>
                <div><input type="text" name="PrenomUtilisateur" <?php if($mode!="ajout"){echo 'value="'.$utilisateurChoisi->getNomUtilisateur().'"';} if ($mode=="suppr") echo"disabled";?>/></div>
                <div></div>            
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div><label for="Classe">Mot de passe :</label></div>
                <div><input type="text" name="MotDePasse" <?php if($mode!="ajout"){echo 'value="'.$utilisateurChoisi->getMotDePasse().'"';} if ($mode=="suppr") echo"disabled";?>></div>
                <div></div>            
            </div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div><label for="IdMatiere">Matiere :</label></div>
                <div><select name="IdMatiere" width="20">
                <?php
                if($mode=="suppr")
                {
                    echo '<option value="'.$utilisateurChoisi->getIdMatiere().'" selected disabled>'.MatiereManager::findById($utilisateurChoisi->getIdMatiere())->getLibelleMatiere().'</option>';
                }
                else{
                    $lesMatieres=MatiereManager::getList();
                    foreach ($lesMatieres as $uneMatiere)
                    {
                        echo '<option value="'.$uneMatiere->getIdMatiere().'">'.$uneMatiere->getLibelleMatiere().'</option>';
                    }
                }
                ?>  
                </select>
            </div>
                <div></div>            
            </div>
            <div><input type="text" name="Role" value="2" hidden /></div>
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
                <div><button type="reset"><a class="align" href="index.php?page=listeEnseignants">Retour</button></a></div>
                <div></div>
                
            </div>
        </div>
        <div></div>
        
    </div>
</div>
</div>