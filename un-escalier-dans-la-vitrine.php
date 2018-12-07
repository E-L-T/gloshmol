<?php
require_once('inc/init.inc.php');
$page= 'Un escalier dans la vitrine';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ '00-180912-portrait-escalier.jpg', 'vertical', 'Portrait escalier', ''],
    [ '01-KZ180819-escaliers_Chatellerault.jpg', 'horizontal', 'Escaliers Chatellerault', ''],
    [ '02-180929-Chatellerault-escalier_dans_la_vitrine-photo.jpg', 'horizontal', 'Chatellerault escalier dans la vitrine photo', ''],
    [ '03-180929-Chatellerault-dessins-accrochage-1.jpg', 'horizontal', 'Chatellerault dessins accrochage 1', ''],
    [ '04-181016-Chatellerault-10.jpg', 'horizontal', 'Chatellerault 10', ''],
    [ '05-KO10-Chatellerault-Vienne.jpg', 'horizontal', 'Chatellerault Vienne', ''],
    [ '06-KO12-Chatellerault-Manu-gueuses.jpg', 'horizontal', 'Chatellerault Manu gueuses', ''],
    [ '07-KP06-Chatellerault-vitrine.jpg', 'horizontal', 'Chatellerault vitrine', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Un escalier dans la vitrine</h2>
                <p>Exposition Parcours vers l’abstraction<br />
                Du 28 septembre au 14 décembre 2018<br />
                Centre d’art de Châtellerault ateliers de l'imprimé<br />
                Commissariat : Gildas Le Reste<br /><br />

                Installation dans "la vitrine" :<br />
                - peinture murale<br />
                - dessins<br />
                - sculpture banc<br />
                - livrets<br /><br />

                L'installation réalise, concrétise, résonne avec les circonstances : la rencontre avec Gildas et avec la ville, l'école d'art, l'espace de la vitrine.<br />

                Le livret raconte cette aventure, les premières esquisses, les expériences jusqu'à une installation bien différente de ce qu'on imaginait au départ.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
