<?php
require_once('inc/init.inc.php');
$page= 'fantômes';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'fantomes_I-190313-poignee-buche_sculpture-7-w.JPG', 'horizontal', 'poignée buche, 2019', ''],
    [ 'fantomes_I-210409-sculpture-bonhomme_rose-yeux_rebond-paysage-w.jpg', 'horizontal', "rebond d'yeux", ''],
    [ 'fantomes_I-210909-fantome-petite_sculpture-grosse_bite-w.JPG', 'horizontal', 'bite béquille', ''],
    [ 'fantomes_I-LW09-bonomme_rose-fellation-w.jpg', 'vertical', 'fellation, esquisse', ''],
    [ 'fantomes_I-210909-suce_ta_bite-auto_pipe-4-w.JPG', 'vertical', 'auto-pipe', ''],
    [ 'fantomes_I-210909-sculpture_fantome-tete_sang_cassee-hemoglobine-05-w.JPG', 'vertical', 'tête cassée', ''],
    [ 'fantomes_I-211028-sculpture-echelle_escalier-l_80cm-w.jpg', 'vertical', 'échelle escalier', ''],
    [ 'fantomes_I-LT48-sculpture-bonhomme-tete-buche_tuyaux-w.jpg', 'horizontal', 'tête de bûche', ''],
    [ 'fantome_I-livret-anim.gif', 'horizontal', 'édition', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>fantômes I</h2>
                <p>petites sculptures<br>
                Je réalise que j'ai quelques petites sculptures mais surtout beaucoup d'esquisses pour d'autres. Quand je commence à les réaliser ces esquisses, quand je commence à passer du dessin à la sculpture beaucoup d'autres viennent. Elles sont d'abord timides, un peu honteuses puis essaient tant bien que mal de s'accepter en comprenant un peu qui elles sont.<br>Le tome II est en cours</p><br><br>
                
                <h2>une édition</h2>
                <p>L'édition réunit esquisses et photos de près de 40 sculptures. Imprimée et façonnée à l'atelier, Aubervilliers 2021.<br>18x24 cm, 80 pages, 20 € + fdp</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
