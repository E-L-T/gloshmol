<?php
require_once('inc/init.inc.php');
$page= 'Colportage de sacs';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
  [ 'col_sacs-192-Wirtz-w.jpg', 'vertical', '', ''],
  [ 'col_sacs-193-Wirtz-w.jpg', 'horizontal', '', ''],
  [ 'col_sacs-194-Wirtz-w.jpg', 'horizontal', '', ''],

];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Bags</h2>
                  <p>Colportage à la galerie Stephen Wirtz, le 07/03/2000, San Francisco</div>
        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
