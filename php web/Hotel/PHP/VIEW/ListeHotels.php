<?php
     $tableau=HotelsManager::getList();
     echo'<div class="colonne">
          <div class="espacehor"></div> 
          <div class="lingne">
               <div></div>
               <div class="celule entete justify">Nom de l\'hotel</div>
               <div class="celule entete justify">Ville</div>
               <div class="celule entete justify">Station</div>
               <div class="celule entete justify"></div>
               <div></div>
            </div>';
     foreach($tableau as $unHotel)
     {
     echo '<div class="lingne">
               <div></div>
               <div class="celule">'.$unHotel->getNomHotel().'</div>
               <div class="celule">'.$unHotel->getVilleHotel().'</div>
               <div class="celule">'.StationsManager::findById($unHotel->getIdStation())->getNomStation().'</div>

               <div class="celule space">
                    <a href="index.php?page=formHotels&mode=detail&id='.$unHotel->getIdHotel().'"><button>'.texte("consulter").'</button></a>';
                    if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRoleUser()==2)
                    {
                        echo' <a href="index.php?page=formHotels&mode=modif&id='.$unHotel->getIdHotel().'"><button>'.texte("modifier").'</button></a>
                              <a href="index.php?page=formUtilisateurs&mode=suppr&id='.$unHotel->getIdHotel().'"><button>'.texte("supprimer").'</button></a>';
                    }
               echo '</div>
               <div></div>
               </div>';
     }
     echo'</div>
          <div class="espacehor"></div>
          <div>
          <div></div>
          <a href="index.php?page=formUtilisateurs&mode=ajout"><div class="bouton vertclair">'.texte("AjoutUtilisateur").'</div></a>
          <div></div>
          </div>';
?>