<?php
require_once('inc/init.inc.php');
$page= 'LMQP';// écrire ici le nom du projet, c'est ce qui s'affiche dans l'onglet du navigateur
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
    [ 'LMQP-angle-090405-St_Cyr-04-w.JPG', 'horizontal', 'Angle St Cyr', ''],
    ['FH32-FeV-transformation.jpg', 'vertical', 'FH32 FeV Transformation', ''],
    [ 'LMQP-dalle-st_cyr-w.jpg', 'horizontal', 'Dalle St cyr', ''],
    [ 'LMQP-porte2-090405-St_Cyr-07-w.JPG', 'horizontal', 'Porte St Cyr', ''],
    [ 'LMQP-St_Cyr-090405-22-w.JPG', 'horizontal', 'St Cyr 22', ''],
    [ 'LMQP-tour-090323-02-w.JPG', 'horizontal', 'Tour', ''],
    ['FW281-Che-Eglise_pce.jpg', 'vertical', 'FW281-Che-Eglise_pce', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>LMQP doubles cubes - installations</h2>
                <!-- Placer le titre à l'intérieur  des balises h2 ci-dessus-->
                <p>Grimper une marche, dresser une colonne, monter un mur ou franchir une porte. C’est à ces expériences conscientes que ce projet s’attaque.<br>
                Il s’agit là d’un projet de sculpture, d’installations, dans le prolongement du travail de dessin, de la série des bleus.<br>
                Il croise deux de mes travaux, les dessins et les meubles, revêt des dimensions ludiques et narratives. C’est un travail artistique mais aussi architectural.<p>
                <!--Placer le texte dans des balises <p>, comme ci-dessus. la balise <br> indique un retour à la ligne   -->
                <h3>Principe</h3>
                <!-- Placer les intertitres dans des balises <h3> -->
                <p>Le principe est proche d’un jeu de construction, c’est un assemblage de modules de base. Ces assemblages décrivent des formes architecturales à l’échelle 1/1.</p>

                <h3>Sites</h3>
                <p>Une attention particulière est prêtée au site. Le premier est une dalle bleue sur l’aérodrome de Saint-Cyr l’Ecole. Au-delà de mon penchant pour l’hétérotopie, qualité paysagère subjective et poétique d’un site pratiqué par les avions, un tel lieu répond, fait écho à l’actualité “grand Paris” : plaine de Versailles, autoroutes A86, A13, A14, pistes d’avions, nouvelle voie ferrée et grand projets urbains en chantier font les circonstances d’un territoire sur lequel reposent des enjeux lourds et actuels.
                Ce premier site d’expérimentation donne une entrée dans ce projet par l’échelle domestique : les figures assemblées dans un premier temps sont celles de la maison.
                Une fois ces figures éprouvées, d’autres assemblages contextuels seront déplacés.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>

