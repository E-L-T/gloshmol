<?php
require_once('inc/init.inc.php');
$page= 'Lisbonne, dessins';// Lisbonne dessins, livret
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ci-dessous les infos sur les images en respectant le format :  
// [ 'nom-du-fichier', 'vertical' ou 'horizontal', 'legendeTitre', 'legendeDetails'],
// Il faut créer une ligne par fichier image, en respectant bien le format, les crochets, les virgules à l'intérieur et la virgule en fin de ligne
// S'il n'y a pas de légendes, laisser tout de même les apostrophes vides.

$images = [
    [ 'Lisbonne_dessins-livret-191002-1-w.jpg', 'horizontal', 'Lisbonne dessins', ''],
    [ 'Lisbonne_dessins-livret-191002-2-w.jpg', 'horizontal', 'Lisbonne dessins', ''],

];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Lisbonne dessins</h2>
                <!-- Placer le titre à l'intérieur  des balises h2 ci-dessus-->
                <p>"Chloé vient d’avoir 40 ans. Quand on lui a demandé ce qu’elle voulait pour son anniversaire elle a dit qu’elle voulait des vacances avec moi alors tous les amis ont donné dans une cagnotte, on a laissé les filles à belle maman et on est parti quatre jours à Lisbonne."...<p>
                <!--Placer le texte dans des balises <p>, comme ci-dessus. la balise <br> indique un retour à la ligne   -->
                <!-- Placer les intertitres dans des balises <h3> -->
                <p>18x24 cm, 68 pages<br>Imprimé, broché et façonné à l'atelier, Aubervilliers 2019<br>ISBN 978-2-494939-00-4<br>20€ + fdp (sans l'abeille)</p>


            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>

