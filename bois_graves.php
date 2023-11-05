<?php
require_once('inc/init.inc.php');
$page= 'bois graves';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'bois_graves-131029-triangle-2-w.jpg', 'vertical', 'triangle, 2013', ''],
    [ 'bois_graves-JZ-140312-rouge_bleu-4_5-w.jpg', 'horizontal', 'rouge et bleu, 36x24 cm', ''],
    [ 'bois_graves-JZ140901-diagonales-w.jpg', 'horizontal', 'diagonales', ''],
    [ 'bois_graves-JZ161005-seins_roses-pelouse-w.jpg', 'vertical', 'seins roses, pelouse, 18x24 cm', ''],
    [ 'bois_graves-edition_2022-w.gif', 'horizontal', 'édition, livret, 28 p, 18x24 cm', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>bois gravés</h2>
                <p>Les bois gravés sont des peintures oblets. Dans des planches 18x24, dans leur matière des dessins se jouent du ciseau à bois et du copeau d'agglo, en couleurs.<br>
 </p><br><br>
                
                <h2>édition</h2>
                <p>Un livret d'étape est disponible sur commande.<br>18x24cm, 28 pages, imprimé et façonné à l'atelier, Aubervilliers 2022</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
