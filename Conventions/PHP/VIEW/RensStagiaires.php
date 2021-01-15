<div class="colonne centre">
<?php
        $idFormateur=2;
        $lesFormations=AnimationManager::getByUtilisateur($idFormateur);
        if (count($lesFormations)>1)
        {
            echo'<select id="select">';
            foreach($lesFormations as $uneFormation)
            {
                $libelle=FormationsManager::findById($uneFormation->getIdFormation())->getLibelleFormation();
                echo'<option value="">'.$libelle.'</option>';
            }
            echo'</select>';
        }
        else
        {
            $libelle=FormationsManager::findById($lesFormations[0]->getIdFormation())->getLibelleFormation();
            echo'<div><input name="formation" id="formation" value="'.$libelle.'" disabled></div>';
        }
    ?>
    <div class="espaceHor"></div>
    <select id="session">
        <option value="0">Selectionnez une Session</option>
    </select>
</div>