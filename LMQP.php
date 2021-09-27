<?php
require_once('inc/init.inc.php');
$page= 'LMQP';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'LMQP-angle-090405-St_Cyr-04-w.JPG', 'horizontal', 'Angle St Cyr', ''],
    [ 'LMQP-dalle-st_cyr-w.jpg', 'horizontal', 'Dalle St cyr', ''],
    [ 'LMQP-porte2-090405-St_Cyr-07-w.JPG', 'horizontal', 'Porte St Cyr', ''],
    [ 'LMQP-St_Cyr-090405-22-w.JPG', 'horizontal', 'St Cyr 22', ''],
    [ 'LMQP-tour-090323-02-w.JPG', 'horizontal', 'Tour', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>LMQP doubles cubes - installations</h2>
                <p>Grimper une marche, dresser une colonne, monter un mur ou franchir une porte. C’est à ces expériences conscientes que ce projet s’attaque.<br>
                Il s’agit là d’un projet de sculpture, d’installations, dans le prolongement du travail de dessin, de la série des bleus.<br>
                Il croise deux de mes travaux, les dessins et les meubles, revêt des dimensions ludiques et narratives. C’est un travail artistique mais aussi architectural.<p>

                <h3>Principe</h3>
                <p>Le principe est proche d’un jeu de construction, c’est un assemblage de modules de base. Ces assemblages décrivent des formes architecturales à l’échelle 1/1.</p>

                <h3>Sites</h3>
                <p>Une attention particulière est prêtée au site. Le premier est une dalle bleue sur l’aérodrome de Saint-Cyr l’Ecole. Au-delà de mon penchant pour l’hétérotopie, qualité paysagère subjective et poétique d’un site pratiqué par les avions, un tel lieu répond, fait écho à l’actualité “grand Paris” : plaine de Versailles, autoroutes A86, A13, A14, pistes d’avions, nouvelle voie ferrée et grand projets urbains en chantier font les circonstances d’un territoire sur lequel reposent des enjeux lourds et actuels.
                Ce premier site d’expérimentation donne une entrée dans ce projet par l’échelle domestique : les figures assemblées dans un premier temps sont celles de la maison.
                Une fois ces figures éprouvées, d’autres assemblages contextuels seront déplacés.</p>

                <h3>Livret</h3>
                <p>Imprimé et façonné à l'atelier, Aubervilliers.<br>18x24 cm - 20 pages - 15 euros + fdp</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
