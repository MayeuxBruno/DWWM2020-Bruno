<?php
$lesRegions=RegionsManager::getList();
echo'<select id="selectRegion">';
foreach ($lesRegions as $uneRegion)
{
    echo'<option value="'.$uneRegion->getIdRegion().'">'.$uneRegion->getLibelleRegion().'</option>';
}
echo'</select>';