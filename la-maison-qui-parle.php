<?php
require_once('inc/init.inc.php');
$page= 'La maison qui parle';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'LMQP-dalle-st_cyr-w.jpg', 'horizontal', "", ""]
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>La maison qui parle</h2>
                <p><a href="documents/8-book.pdf" target="_blank">Limites de représentation de l'espace habité</a>. Recherches architecturales, urbaines et artistiques.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
