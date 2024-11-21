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
    [ 'small_design-310322-meuble-tabouret-galette-w.JPG', 'vertical', 'restauration de tabourets, les galettes', ''],
    [ 'small_design_II-210310-meuble_lustre-w.jpg', 'horizontal', 'lustre', ''],
    [ 'small_design_II-210205-chaise-17-w.jpg', 'vertical', 'chaise pin', ''],
    [ 'small_design_II-200508-etagere_Moulins-2-w.jpg', 'horizontal', 'étagère modèle Moulins', ''],
    [ 'small_design_II-200611-interrupteur-w.jpg', 'vertical', 'inter', ''],
    [ 'small_design-II-201211-livre.gif', 'horizontal', 'édition', ''],
    [ 'ligne-points_roses.jpg', 'horizontal',  ''],
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
                <p>"Le small design c’est comme le great design mais en small.<br />Le small design II c'est pareil mais en II fois mieux"<br /><br /><br /><br />Small design II<br>68 pages, 18x24 cm, broché, numéroté<br>imprimé façonné à l'atelier, Aubervilliers 2021<br />ISBN : 978-2-494939-22-6<br>20 €+fdp<br /><br><br><br>Small design I<br>32 pages, 18x24 cm, broché, numéroté<br>imprimé façonné à l'atelier, Aubervilliers <br>1° édition 2017<br />ISBN : 978-2-494939-21-9<br />15 € + fdp </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
