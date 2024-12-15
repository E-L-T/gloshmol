<?php
require_once('inc/init.inc.php');
$page= 'carnets de dessin';// carnets de dessin
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
    [ 'carnets_dessins-241204-carnets_agraffes-bleu_orange-w.jpg', 'horizontal', 'carnets agrafés, cuir bleu azurin, papier saumon Vadebourg 120g, 40 feuilles', ''],
    [ 'carnets_dessins-241204-carnets_boulonnes-2-w.jpg', 'horizontal', 'carnets boulonnés, couverture cuir, dos contreplaqué vernis tampon, papier étude 90g, 60 feuilles numérotées', ''],
    [ 'carnets_dessin-bleu_rose-211218-hirizontal-w.JPG', 'horizontal', 'carnets agrafés, cuir rose, papier bleu Vadebourg 80g, 80 feuilles', ''],
    [ 'carnets_dessin_bleus-200220-04-w.jpg', 'horizontal', 'carnets agrafés, cuir bleu gris, papier crème 160g, 40 feuilles', ''],
    [ 'carnets_dessin_bleus-200220-09-w.jpg', 'horizontal', 'carnets agrafés, cuir bleu gris et marron, papier crème', ''],
    [ 'carnets_agrafes-191219-w.jpg', 'horizontal', 'carnets agrafés, cuir demi peau, papier crème', ''],
    [ 'carnets-agrafe-191119-w.jpg', 'horizontal', 'carnets agrafés', ''],
    [ 'carnets-dessin-190711-14-w.jpg', 'horizontal', 'format 18x24 cm, dos en bois, plusieurs couleurs de cuir', ''],
    [ 'carnets-dessin-190711-16-w.jpg', 'vertical', 'pages numérotées, petite note à la fin', ''],
    [ 'carnets-dessin-190711-17-w.jpg', 'vertical', 'une pince bien pratique', ''],
    [ 'carnets-dessin-190711-13-w.jpg', 'horizontal', 'les carnets boulonnés, dos en contreplaqué vernis', ''],
    
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Des carnets de dessin</h2>
                <!-- Placer le titre à l'intérieur  des balises h2 ci-dessus-->
                <p>Je fabrique mes carnets de dessins parce que je ne trouve pas dans le commerce ni le format ni le modèle qui me conviennent. Je fabrique et utilise 2 types de carnets, les boulonnés et les agrafés.<br><p>
                <!--Placer le texte dans des balises <p>, comme ci-dessus. la balise <br> indique un retour à la ligne   -->
                <h3>18x24cm, agrafé</h3>
                <p>Le modèle agrafé permet la double page, il s'utilise sans pince. Il peut être plus ou moins souple en fonction du grammage du papier, c'est une sorte de cahier. En terme d'objet il est simple. La couverture est en cuir, il peut être monté avec différents papiers, peut comporter en fonction du grammage un nombre de pages variable.<br>40€ + fdp</p>

                <h3>18x24cm, boulonné, dos bois vernis</h3>
                <!-- Placer les intertitres dans des balises <h3> -->
                <p>Les carnets boulonnés sont bien pratiques avec leur dos rigide, on peut dessiner debout, sans table. On peut les défaire, les démonter pour les travailler et les numériser, extraire un dessin sans détruire le folio, scanner sans que le pli du livre n'apparaisse.<br>Le papier est un papier dessin 90 g polyvalent et souple, le carnet compte 60 pages. Les pages sont numérotées au dos ce qui permet de remonter le carnet dans l'ordre. Le bois utilisé pour le dos est récupéré, traité, vernis au tampon. La couverture est en cuir. A la fin du carnet une note raconte comment je m'en sers.<br>40€ + fdp</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>

