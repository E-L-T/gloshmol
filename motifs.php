<?php
require_once('inc/init.inc.php');
$page= 'Motifs';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'motifs_02-210506-livret-1-w.jpg', 'horizontal', 'Livret', ''],
    [ 'motifs_02-210506-livret-2-w.jpg', 'horizontal', 'Livret', ''],
    [ 'motifs_02-210506-livret-4-w.jpg', 'horizontal', 'Livret', ''],
    [ 'motifs_02-210504-LZ190913-motif-Souvigny-frise-sous_verre-24x36-w.jpg', 'horizontal', 'frise de Souvigny, dessin sous verre, 24x36 cm', ''],
    [ 'motifs_02-210504-LZ210203-vague-ruban_brun-bleu_ceruleum-sous_verre-24x36-w.jpg', 'horizontal', 'ruban beige sur bleu, dessin sous verre, 24x36 cm', ''],
    [ 'ligne-points_roses.jpg', 'horizontal',  ''],
    [ 'motifs-01-151130-livret.jpg', 'horizontal', 'Livret motifs 01', ''],
    [ 'motifs-JZ150824-notre_dame_la_grande-motif-ruban-arche.jpg', 'horizontal', 'Notre Dame la grande motif ruban arche', ''],
    [ 'motifs-JZ150901-motif-cercles.jpg', 'horizontal', 'Motif cercles', ''],
    [ 'motifs-JZ150901-Poitiers-notre_dame_la_grande-motif-caissons.jpg', 'vertical', 'Poitiers notre dame la grande motif caissons', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Motifs 02</h2>
                <p>Le deuxième opus "motifs" réunit des esquisses d'archives et des recherches actuelles, tente de les articuler en couleurs, comme un tour de chants.<br>
                <br>18x24 cm, 76 pages<br>imprimé, broché et façonné à l'atelier, Aubervilliers<br>20 € + fdp<br>ISBN 978-2-9587859-9-4</p><br><br>
                
                <h2>Motifs 01</h2>
                <p>Ce livret réunit des dessins inspirés des fresques de l'église Notre Dame la Grande de Poitiers.<br><br>
                Les dessins sont exposés à la <a href="http://www.librairievolume.fr">librairie Volume</a> en décembre 2015.<br>18x24 cm, 20 pages, 15 € + fdp<br>ISBN 978-2-9587859-8-7</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
