<?php
require_once('inc/init.inc.php');
$page= "L'aventure";
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
  [ 'ERCO-070621-Erco-Michelin-04.jpg', 'horizontal', '', ''],
  [ 'ERCO-carnets.jpg', 'horizontal', 'Carnets', ''],  
  [ 'ERCO-070621-2.jpg', 'horizontal', 'Deux amis devant les peintures', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>L'aventure</h2>
                  <p>Exposition avec Nicolas Michelin pour le lancement du livre sur les Farines<br>
                    Le 21/06/2007, espace Erco, Paris<br>
                    Le lieu est divisé en deux espaces. Dans la grande salle Nicolas projette des images de son travail. Dans la seconde pièce j'ai déposé des peintures du chantier. Sous une plaque de plexi les carnets sont ouverts.</p>
                    <p>L'aventure de la transformation d'une Halle<br>
                       - réalisation : Anteprima<br>
                       - graphisme : Béatrice Fichet<br>
                       - 12 x 17 cm<br>
                       - 144 pages
                    </p>
                    <p><em>Voir le projet :  <a href="<?= RACINE_SITE ?>paris-halle-aux-farines-visiteur.php">Paris Halle aux farines - Visiteur</a></em></p>
          </div>
        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
