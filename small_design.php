<?php
require_once('inc/init.inc.php');
$page= 'small design I et II';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'small_design_II-201211-livret-w.jpg', 'horizontal', 'small design II, multiprise électrique', ''],
    [ 'small_design_II-210215-livret-1-w.jpg', 'horizontal', 'small design II, dans la jungle', ''],
    [ 'small_design_II-210215-livret-2-w.jpg', 'horizontal', 'small design II, sellette', ''],
    [ '', 'horizontal', '+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+:+', ''],
    [ 'small_design-livret-191017-09.jpg', 'horizontal', 'small design I, mangeoire poule', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Small design I et II</h2>
                <p>"Le small design c’est comme le great design mais en small.<br />Le small design II c'est pareil mais en II fois mieux"<br /><br /><br /><br />Small design II, Livret 68 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2021<br /><br>20 €+fdp<br /><br><br><br>Small design I, Livret 32 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2017<br /><br />15 € + fdp </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
