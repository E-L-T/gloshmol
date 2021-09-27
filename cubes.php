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

    [ 'cubes-130416-M-condiments-w.JPG', 'horizontal', 'Meuble condiments', ''],
    [ 'cube-2_tiroirs-ph_2-061130-3-w.jpg', 'horizontal', 'Cube 2 tiroirs', ''],
    [ 'cube_boite-2-w.jpg', 'horizontal', 'Cube boite', ''],
    [ 'cubes_rouges-121117-05-w.jpg', 'vertical', 'Cubes rouges', ''],
    [ 'cubes-100420-poutre_caissons-test_2-saut-w-try.gif', 'horizontal', 'test de poutre pour le plancher à caisson avec Rémus', ''],
    [ 'cubes_meubles-210321-livret-03.jpg', 'horizontal', 'livret, cube de sac et tabouret', ''],
    [ 'cubes_meubles-210321-livret-09.jpg', 'horizontal', 'livret, établis à Saint Cyr', ''],
    [ 'cubes_meubles-210321-livret-12.jpg', 'horizontal', 'livret, cubes à roulettes', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Meubles cubes</h2>
                    <h3></h3>
                    <p>Les cubes mesurent 37 cm d'arrête. Ne me demandez pas pourquoi, je ne sais pas, je sais par contre que ça marche, qu'avec cette dimension on peut faire beaucoup de choses, mettre toutes sortes de choses dedans, combiner... <br /><br />Un livret réunit ces meubles en modèles. Près de 400 cubes on été réalisés. Ils sont parfois agglomérés en gros meubles, parfois en éléments architectoniques comme le plancher à caissons ou un mur, parfois encore en architecture comme dans le projet d'extension d'un pavillon en 2006.<br /><br />Livret 60 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2021<br />20 € + fdp </p>
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
