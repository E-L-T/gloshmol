<?php
require_once('inc/init.inc.php');
$page= 'Abbaye de Cluny, le musée';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'Cluny-abbaye-livret-191017-10-w.jpg', 'horizontal', 'couverture et quatrième', ''],
    [ 'Cluny-abbaye-livret-191017-04-w.jpg', 'horizontal', 'visage fleur', ''],
    [ 'Cluny-abbaye-livret-191017-03-w.jpg', 'horizontal', 'médaillons, sirène et pellerin se retirant une écharde', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Abbaye de Cluny, le musée</h2>
                <p>"Les sujets choisis pour les dessins de ce livret s’orientent vers le motif ou les figures sculptées sur les pierres des musées pour approcher un peu le langage d’une époque éloignée de quelques siècles et entendre des rêves de sirènes ou de fleurs."<br /><br />Livret 28 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2018<br />15 € + fdp </p>

                <p><a href="http://www.cluny-abbaye.fr/" target="_blank">Site de l'abbaye de Cluny</a></p>

            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
