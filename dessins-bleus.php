<?php
require_once('inc/init.inc.php');
$page= 'Dessins bleus';// écrire ici le nom du projet, c'est ce qui s'affiche dans l'onglet du navigateur
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
    ['HZ-LMQP-bleu_maison_ombre-070416-w.jpg', 'horizontal', 'La maison et son ombre', '18 x 24 cm'],
    ['HZ-bleu-maison-pagode-070901-W.jpg', 'vertical', 'Pagode', '18 x 24 cm'],
    ['KZ170918-LMQP-bleu_maison-BADABOUM-2-Claire_Fretel-w.jpg', 'vertical', 'BADABOUM', '18 x 24 cm'],
    ['KZ170727-LMQP-bleu_maison-grand_telescope-w.jpg', 'vertical', 'Grand télescope', ''],
    ['KZ+170901-LMQP-bleu_maison-grade-w.jpg', 'horizontal', 'Grades', ''],
    ['JZ161126-LMQP-bleu_maison-motif_zig_zag-1-w.jpg', 'vertical', 'Serpent', ''],
    ['KZ+170323-LMQP-bleu_maison-scie_lame-roue-w.jpg', 'horizontal', 'Lame de scie', ''],
    ['dessins_bleus-caddie-200430-LMQP-w.jpg', 'vertical', 'caddie de dessins bleus', ''],
];
?>
            <div id ="mediasRealisation">
                <div class="videoWrapper tailleVideo1">
                    <iframe src="https://player.vimeo.com/video/235309761" width="640" height="468" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Dessins bleus</h2>
                <!-- Placer le titre à l'intérieur  des balises h2 ci-dessus-->
                <p>LMQP<br />
                Une collection de quelques centaines de dessins<br />
                Aquarelles au bleu de Lectoure<br/>Format 18x24 cm<br/>Un livret recueille l'ensemble de la collection. 18x24 cm, 32 pages.
                </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>

