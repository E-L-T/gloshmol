<?php
require_once('inc/init.inc.php');
$page= 'Rotterdam, dessins';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'Rotterdam-livret-200328-01-W.jpg', 'horizontal', 'couverture', ''],
    [ 'Rotterdam-livret-200328-06-W.jpg', 'horizontal', 'motifs', ''],
    [ 'Rotterdam-livret-200328-08-W.jpg', 'horizontal', 'paysages et couleurs', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Rotterdam, dessins</h2>
                <p>"Je propose d’accompagner les étudiants en dessinant avec eux, au milieu d’eux, en même temps qu’eux. Et c’est vrai que je profite bien de ce séjour, de ces visites pour dessiner."<br /><br />Livret 44 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020<br />15 € + fdp </p>


            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
