<?php
require_once('inc/init.inc.php');
$page= 'Cubes';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ '12-130416-M-condiments-w.JPG', 'horizontal', 'Meuble condiments', ''],
    [ '10-M-papier_2-061214-w.jpg', 'horizontal', 'Meuble papier 2', ''],
    [ '11-M-papier_3-061219-w.jpg', 'horizontal', 'Meuble papier 3', ''],
    [ '03-cube_1tiroir-050518-4-w.JPG', 'horizontal', 'Cube 1 tiroir', ''],
    [ '02-cube-2_tiroirs-ph_2-061130-3-w.jpg', 'horizontal', 'Cube 2 tiroirs', ''],
    [ '04-cube-sac-52-w.jpg', 'horizontal', 'Cube sac', ''],
    [ '05-meuble outil-w.JPG', 'vertical', 'Meuble outil', ''],
    [ '06-cube_boite-2-w.jpg', 'horizontal', 'Cube boite', ''],
    [ '07-121117-cubes_rouges-05-w.jpg', 'vertical', 'Cubes rouges', ''],
    [ '08-meubles_cubes-caisses_boites-w.jpg', 'horizontal', 'Meubles cubes caisses boites', ''],
    [ '09-meubles_cubes-double-portes_coulissantes-w.jpg', 'horizontal', 'Meubles cubes double portes coulissantes', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Cubes</h2>
                    <h3>Fiches techniques</h3>
                        <p>
                            <a href="<?= RACINE_SITE ?>documents/M-cube_1tiroir.pdf">Cube à un tiroir</a><br/><br>
                            <a href="<?= RACINE_SITE ?>documents/M-cube_2tiroir.pdf">Cube à deux tiroirs</a><br/><br>
                            <a href="<?= RACINE_SITE ?>documents/M-cube-boite.pdf">Cube boîte</a><br/><br>
                            <a href="<?= RACINE_SITE ?>documents/M-cube-elastiques.pdf">Cube élastiques</a><br/><br>
                            <a href="<?= RACINE_SITE ?>documents/M-cube_papier1.pdf">Cube papier 1</a><br/><br>
                            <a href="<?= RACINE_SITE ?>documents/M-cube_papier2.pdf">Cube papier 2</a><br/><br>
                        </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
