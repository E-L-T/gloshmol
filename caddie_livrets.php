<?php
require_once('inc/init.inc.php');
$page= 'caddie de livrets';// écrire ici le nom du projet, c'est ce qui s'affiche dans l'onglet du navigateur
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ci-dessous les infos sur les images en respectant le format :  
// [ 'nom-du-fichier', 'vertical' ou 'horizontal', 'legendeTitre', 'legendeDetails'],
// Il faut créer une ligne par fichier image, en respectant bien le format, les crochets, les virgules à l'intérieur et la virgule en fin de ligne
// S'il n'y a pas de légendes, laisser tout de même les apostrophes vides.


$images = [
    [ 'caddie_livrets-181031-w.JPG', 'horizontal', 'cadding in the rain', ''],
    [ 'caddie_livrets-ouvert-180928-w.jpg', 'vertical', 'le caddie ouvert', ''],
    [ 'livrets-18x24-140210-w.jpg', 'vertical', 'le caddie ouvert', ''],
    [ 'coffret_livrets-18x24-170607-w.jpg', 'horizontal', 'coffret de livrets, 2017', ''],
    [ 'coffret_livrets-18x24-190404-w.jpg', 'horizontal', 'coffrets de livrets, vernis tampon', ''],
    [ 'coffret_livrets-18x24-190404-w.jpg', 'vertical', 'coffret pour une petite trentaine de livrets', '']
];
?>
            <div id ="mediasRealisation">
            
<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Le caddie de livrets</h2>
                <!-- Placer le titre à l'intérieur  des balises h2 ci-dessus-->
                <p>Un nouveau caddie pour colporter des livrets. Pour les archiver en les gardant pressés.
                   <br> De nouveaux pneux tout blancs!
                </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
