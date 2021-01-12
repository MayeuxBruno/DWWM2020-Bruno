<?php
$lesRegions=RegionsManager::getList();
echo'<select id="selectRegion">';
echo'<option value="defaut" selected>--Choisissez votre region--</option>';
foreach ($lesRegions as $uneRegion)
{
    echo'<option value="'.$uneRegion->getIdRegion().'">'.$uneRegion->getLibelleRegion().'</option>';
}
echo'</select>
<div class="listeDep colonne">

<div class="unDept"></div>
</div>';