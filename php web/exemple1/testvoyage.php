<?php
    $titrepage="Invitation je sais pas ou";
    if (file_exists("head.php")) {
        include("head.php");
    } else {
        echo 'erreur le fichier "head.php est introuvable';
    }
?>
<body>
    <?php
         if (file_exists("header.php")) {
            include("header.php");
        } else {
            echo 'erreur le fichier "header.php est introuvable';
        }
        if (file_exists("nav.php")) {
            include("nav.php");
        } else {
            echo 'erreur le fichier "nav.php est introuvable';
        }
    ?>
             <div class="partie1 colonne">
                 <div class="espacehor">
                 </div>
                 <article>
                     <div class="espace"></div>
                     <div class="text colonne">
                        <div class="titrearticle">Des vacances a la montagne entre ciel et terre</div>
                            <div class="textarticle"><p>"La montagne ça vous gagne"! On a tous entendu 
                                ce slogan au moins une fois dans sa vie. Et globalement, on partage 
                                ce sentiment. Une fois qu'on a mis les p altitude, qu'on s'est perdu 
                                dans les petits villages de bois, qu'on a goûté aux joies des de ski et 
                                de l'après-ski, qu'on s'est baigné dans un lac de haute altitude, 
                                qu'on a obs nature endormie en hiver depuis sa location chalet ou qu'on 
                                s'est réveillé au printemps et découvert le goût savoureux d'un plat montagnard, 
                                c'est perdu! On éprouve chaque année le besoin irrépressible d'y retourner, ne serait ce que 
                                le temps d'un week-end. </p>
                            </div>
                        </div>
                     <div class="deco">
                         <img src="images/01.jpg"></img>
                     </div>
                     <div class="espace"></div>
                 </article>
                 <div class="espacehor"></div>
                 <article>
                    <div class="espace"></div>
                    <div class="deco">
                        <img src="images/02.jpg"></img>
                    </div>
                    <div class="text colonne">
                       <div class="titrearticle">Des vacances a la montagne entre ciel et terre</div>
                           <div class="textarticle"><p>"La montagne ça vous gagne"! On a tous entendu 
                               ce slogan au moins une fois dans sa vie. Et globalement, on partage 
                               ce sentiment. Une fois qu'on a mis les p altitude, qu'on s'est perdu 
                               dans les petits villages de bois, qu'on a goûté aux joies des de ski et 
                               de l'après-ski, qu'on s'est baigné dans un lac de haute altitude, 
                               qu'on a obs nature endormie en hiver depuis sa location chalet ou qu'on 
                               s'est réveillé au printemps et découvert le goût savoureux d'un plat montagnard, 
                               c'est perdu! On éprouve chaque année le besoin irrépressible d'y retourner, ne serait ce que 
                               le temps d'un week-end. </p>
                           </div>
                       </div>
                    
                    <div class="espace"></div>
                </article>
                 <div class="espacehor"></div>
             </div>
             <div class="partie2">
                <div id="destination" class="texteminiature taillemax">Les destinations les plus recentes</div>
                <div class="vignette">
                    <div class="espace"></div>
                    <div class="espace"></div>
                    <div id="id8" class="texteminiature">Paris<br>France</div>
                    <div class="espace"></div>
                    <div id="id7" class="texteminiature">Londres<br>Royaume-uni</div>
                    <div class="espace"></div>
                    <div id="id6" class="texteminiature">Rome<br>Italie</div>
                    <div class="espace"></div>
                    <div id="id5" class="texteminiature">Bali<br>Indonésie</div>
                    <div class="espace"></div>
                    <div class="espace"></div>
                </div>
                <div class="espacehor"></div>
                <div class="vignette">
                    <div class="espace"></div>
                    <div class="espace"></div>
                    <div id="id4" class="texteminiature">Crete<br>Grèce</div>
                    <div class="espace"></div>
                    <div id="id3" class="texteminiature">Barcelone<br>Espagne</div>
                    <div class="espace"></div>
                    <div id="id2" class="texteminiature">Istanbul<br>Turquie</div>
                    <div class="espace"></div>
                    <div id="id1" class="texteminiature">Marrakech<br>Maroc</div>
                    <div class="espace"></div>
                    <div class="espace"></div>
                </div>
                <div class="espacehor"></div>
        
         </div>
         <?php include 'footer.php'; ?>
    
</body>
</html>	