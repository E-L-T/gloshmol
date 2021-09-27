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
    [ 'carnets_dessin_bleus-200220-04-w.jpg', 'horizontal', 'carnets agrafés, cuir bleu gris, papier crème', ''],
    [ 'carnets_dessin_bleus-200220-09-w.jpg', 'horizontal', 'carnets agrafés, cuir bleu gris et marron, papier crème', ''],
    [ 'carnets_agrafes-191219-w.jpg', 'horizontal', 'carnets agrafés, cuir demi peau, papier crème', ''],
    [ 'carnets-agrafe-191119-w.jpg', 'horizontal', 'carnets agrafés', ''],
    [ 'carnets-dessin-190711-12-w.jpg', 'vertical', 'les carnets', ''],
    [ 'carnets-dessin-190711-14-w.jpg', 'horizontal', 'format 18x24 cm, dos en bois, plusieurs couleurs de cuir', ''],
    [ 'carnets-dessin-190711-15-w.jpg', 'horizontal', 'format 9,5x16 cm, dos bois vernis ou plastique, plusieurs couleurs de cuir', ''],
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
                <p>Mon stock de carnets touche à sa fin, je dois le renouveler.<br>Je réalise des carnets boulonnés qui me sont bien pratiques avec leur dos rigide et la possibilité de les défaire pour numériser, ou extraire sans que le pli apparaisse au scan ni que la reliure souffre du décrochage d'un dessin.<br>Le papier est un bon papier 90 g polyvalent et souple. Chaque carnet contient 55 pages numérotées au dos. Le bois utilisé pour le dos est récupéré des poubelles et traité. Le cuir est taillé dans des chutes, peut comporter parfois tâches ou griffures.<p>
                <!--Placer le texte dans des balises <p>, comme ci-dessus. la balise <br> indique un retour à la ligne   -->
                <h3>18x24cm, agrafé</h3>
                <p>Papier blanc ou crème, couverture cuir<br>20€ + fdp</p>

                <h3>18x24cm, dos bois vernis</h3>
                <!-- Placer les intertitres dans des balises <h3> -->
                <p>60 pages numérotées, papier dessin 90 g, couverture cuir, dos contreplaqué fin vernis<br>30€ + fdp</p>

                <h3>Format 9,5x16 cm dos bois</h3>
                <p>id. 15 € + fdp</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>

