<?php
require_once('inc/init.inc.php');
$page= 'du bois des feuilles';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'du_bois_des_feuilles-220910-Valentin-exposition-bouquet+Benjamin_Swain-w.jpg', 'horizontal', 'Bouquet, exposition "Le vent souffle où il veut", galerie Philippe Valentin, 2022. Peinture Benjamin Swain', ''],
    [ 'du_bois_des_feuilles-220909-famille_bouquet-bois_feuilles-FIMINCO-MAD-w.jpg', 'horizontal', 'Une famille, salon MAD Multiple Art Days, fondation FIMINCO, 2022', ''],
    [ 'du_bois_des_feuilles-220422-sculpture-bois_feuille-oblique_arche-w.JPG', 'horizontal', 'mains croisées', ''],
    [ 'du_bois_des_feuilles-220502-sculpture_bois_papier-poils_longs-A4-2w.JPG', 'vertical', 'poils', ''],
    [ 'du_bois_des_feuilles-220422-sculpture-bois_papier-chapeau_ombre_carree-w.jpg', 'horizontal', 'voûte', ''],
    [ 'du_bois_des_feuilles-220127-sculpture-bois_papier-rond_boucles-H48xL28xP21-final-w.jpg', 'vertical', 'borne et boucles', ''],
    [ 'du_bois_des_feuilles-220503-sculpture-bois_papier-borne_boucles-raisin-58x76-w.JPG', 'vertical', 'borne et boucles, encre de chine et brou de noix sur arches 58x76 cm', ''],
    [ 'du_bois_des_feuilles-220504-sculpture-bois_feuille-parasol-1-vertical-w.jpg', 'vertical', 'parasol', ''],
    [ 'du_bois_des_feuilles-livre.gif', 'horizontal', 'édition', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>du bois des feuilles</h2>
                <p>Ramasser un morceau de bois, le couper, glisser une feuille dans la fente, un champ est ouvert. Cette recherche s'élabore dans le dessin et se réalise dans des sculptures pauvres, naives, doucement mécaniques, brutales et fragiles.<br>
 </p><br><br>
                
                <h2>expositions</h2>
                <p>Plusieurs pièces sont exposées à la <a href="https://www.galeriechezvalentin.com/" target="_blank">galerie Philippe Valentin</a>, en particulier à l'occasion de l'exposition "Le vent souffle où il veut" de Hugo Pernet et Philippe Valentin. Des sculptures sont également exposées à la fondation Fiminco lors du salon MAD 7, <a href="http://multipleartdays.fr/" target="_blank">multiple art Days</a> <br>
 </p><br><br>
                
                <h2>édition</h2>
                <p>Une édition est disponible sur commande.<br><br>livre 18x24cm, 80 pages, broché<br>imprimé et façonné à l'atelier, Aubervilliers<br>dépôt légal 2023 n°10000000870688<br>ISBN 978-2-9587859-0-1<br>tirages numérotés<br>20 € + fdp</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
