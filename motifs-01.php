<?php
require_once('inc/init.inc.php');
$page= 'Motifs 01';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ '151130-motifs-01-livret.JPG', 'horizontal', 'Livret', ''],
    [ 'JZ150824-notre_dame_la_grande-motif-ruban-arche.jpg', 'horizontal', 'Notre Dame la grande motif ruban arche', ''],
    [ 'JZ150901-motif-cercles.jpg', 'horizontal', 'Motif cercles', ''],
    [ 'JZ150901-Poitiers-notre_dame_la_grande-motif-caissons.jpg', 'vertical', 'Poitiers notre dame la grande motif caissons', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Motifs 01</h2>
                <p>MOTIFS 01 est un ensemble de dessins réunis dans un livret.<br><br>
                À partir des fresques de l'église Notre Dame la Grande de Poitiers, des études sur les rythmes et décors ouvrent à des interprétations.<br><br>
                Les dessins sont réalisés à l'encre et aquarelle, ils sont au format 18x24 cm.
                Ils sont exposés à la <a href="http://www.librairievolume.fr">librairie Volume</a> en décembre 2015.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
