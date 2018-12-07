<?php
require_once('inc/init.inc.php');
$page= 'Paris Halle aux farines - Visiteur';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'FC71-PHF-voute-W.jpg', 'horizontal', 'FC71 PHF voute W', ''],
    [ 'FC72-PHF-voute-W.jpg', 'horizontal', 'FC72 PHF voute W', ''],
    [ 'FZ47-PHFD-040701-W.jpg', 'vertical', 'FZ47 PHFD 040701 W', ''],
    [ 'GD00-couv-W.JPG', 'horizontal', 'GD00 couv W', ''],
    [ 'GD041-PHFD-040709-W.jpg', 'horizontal', 'GD041 PHFD 040709 W', ''],
    [ 'GD046-PHFD-040709-W.jpg', 'horizontal', 'GD046 PHFD 040709 W', ''],
    [ 'GD047-PHFD-040709-W.jpg', 'horizontal', 'GD047 PHFD 040709 W', ''],
    [ 'GD054-PHFD-040723-W.jpg', 'horizontal', 'GD054 PHFD 040723 W', ''],
    [ 'GD062-PHFD-040813-W.jpg', 'vertical', 'GD062 PHFD 040813 W', ''],
    [ 'GD075-PHFD-040813-W.jpg', 'vertical', 'GD075 PHFD 040813 W', ''],
    [ 'GD076-PHFD-040813-W.jpg', 'horizontal', 'GD076 PHFD 040813 W', ''],
    [ 'GD089-PHFD-041007-W.jpg', 'vertical', 'GD089 PHFD 041007 W', ''],
    [ 'GD104-PHFD-041118-W.jpg', 'horizontal', 'GD104 PHFD 041118 W', ''],
    [ 'GD109-PHFD-041202-W.jpg', 'vertical', 'GD109 PHFD 041202 W', ''],
    [ 'GD116-PHFD-041202-W.jpg', 'horizontal', 'GD116 PHFD 041202 W', ''],
    [ 'GI000-couv-04-2-W.jpg', 'vertical', 'GI000 couv 04 2 W', ''],
    [ 'GI017-PHFD-040618-W.jpg', 'vertical', 'GI017 PHFD 040618 W', ''],
    [ 'GI024-PHFD-040618-W.jpg', 'vertical', 'GI024 PHFD 040618 W', ''],
    [ 'GI029-PHFD-040618-W.jpg', 'vertical', 'GI029 PHFD 040618 W', ''],
    [ 'GI053-PHFD-040623-W.jpg', 'horizontal', 'GI053 PHFD 040623 W', ''],
    [ 'GI065-PHFD-040701-W.jpg', 'vertical', 'GI065 PHFD 040701 W', ''],
    [ 'GI144-PHFD-040806-W.jpg', 'vertical', 'GI144 PHFD 040806 W', ''],
    [ 'GI151-PHFD-040818-W.jpg', 'vertical', 'GI151 PHFD 040818 W', ''],
    [ 'GI154-PHFD-040818-W.jpg', 'vertical', 'GI154 PHFD 040818 W', ''],
    [ 'GI156-PHFD-040818-W.jpg', 'vertical', 'GI156 PHFD 040818 W', ''],
    [ 'GI157-PHFD-040818-W.jpg', 'vertical', 'GI157 PHFD 040818 W', ''],
    [ 'GI198-PHFD-040830-W.jpg', 'vertical', 'GI198 PHFD 040830 W', ''],
    [ 'GI205-PHFD-040908-W.jpg', 'vertical', 'GI205 PHFD 040908 W', ''],
    [ 'GI208-PHFD-040908-W.jpg', 'vertical', 'GI208 PHFD 040908 W', ''],
    [ 'GI209-PHFD-040908-W.jpg', 'vertical', 'GI209 PHFD 040908 W', ''],
    [ 'GI211-PHFD-040908-W.jpg', 'horizontal', 'GI211 PHFD 040908 W', ''],
    [ 'GI233-PHFD-040914-W.jpg', 'horizontal', 'GI233 PHFD 040914 W', ''],
    [ 'GI250-PHFD-041007-W.jpg', 'vertical', 'GI250 PHFD 041007 W', ''],
    [ 'GI267-PHFD-041021-W.jpg', 'horizontal', 'GI267 PHFD 041021 W', ''],
    [ 'GJ00-couv04-W.jpg', 'horizontal', 'GJ00 couv04 W', ''],
    [ 'GJ019-PHFD-040818-W.jpg', 'horizontal', 'GJ019 PHFD 040818 W', ''],
    [ 'GJ020-PHFD-040830-W.jpg', 'vertical', 'GJ020 PHFD 040830 W', ''],
    [ 'GJ021-PHFD-040830-W.jpg', 'horizontal', 'GJ021 PHFD 040830 W', ''],
    [ 'GJ024-PHFD-040908-W.jpg', 'horizontal', 'GJ024 PHFD 040908 W', ''],
    [ 'GJ041-PHFD-041014-W.jpg', 'vertical', 'GJ041 PHFD 041014 W', ''],
    [ 'GK00-couv-2004-W.jpg', 'vertical', 'GK00 couv 2004 W', ''],
    [ 'GK24-PHFD-040818-W.jpg', 'horizontal', 'GK24 PHFD 040818 W', ''],
    [ 'GK50-PHFD-040908-W.jpg', 'vertical', 'GK50 PHFD 040908 W', ''],
    [ 'GL00-couv-04-W.jpg', 'horizontal', 'GL00 couv 04 W', ''],
    [ 'GL20-PHFD-041029-W.jpg', 'horizontal', 'GL20 PHFD 041029 W', ''],
    [ 'GM000-couv-04-W.jpg', 'horizontal', 'GM000 couv 04 W', ''],
    [ 'GN00-couv-04-W.jpg', 'vertical', 'GN00 couv 04 W', ''],
    [ 'GO00-couv-04-W.jpg', 'vertical', 'GO00 couv 04 W', ''],
    [ 'GO40-PHFD-050825-W.jpg', 'horizontal', 'GO40 PHFD 050825 W', ''],
    [ 'GP00-couv-05-W.jpg', 'vertical', 'GP00 couv 05 W', ''],
    [ 'GP44-PHFD-050712-W.jpg', 'vertical', 'GP44 PHFD 050712 W', ''],
    [ 'GP92-PHFD-050712-W.jpg', 'vertical', 'GP92 PHFD 050712 W', ''],
    [ 'GQ00-couv05-W.jpg', 'vertical', 'GQ00 couv05 W', ''],
    [ 'GQ25-PHFD-051010-W.jpg', 'horizontal', 'GQ25 PHFD 051010 W', ''],
    [ 'GQ33-PHFD-051025-W.jpg', 'vertical', 'GQ33 PHFD 051025 W', ''],
    [ 'GR00-couv05-W.jpg', 'vertical', 'GR00 couv05 W', ''],
    [ 'GS00-couv-05-W.jpg', 'vertical', 'GS00 couv 05 W', ''],
    [ 'GS23-PHFD-050825-W.jpg', 'horizontal', 'GS23 PHFD 050825 W', ''],
    [ 'GT000-couv05-W.jpg', 'vertical', 'GT000 couv05 W', ''],
    [ 'GU000-couv05-W.jpg', 'vertical', 'GU000 couv05 W', ''],
    [ 'GU49-PHFD-060103-W.jpg', 'horizontal', 'GU49 PHFD 060103 W', ''],
    [ 'GV00-couv05-W.jpg', 'vertical', 'GV00 couv05 W', ''],
    [ 'panier_siege.jpg', 'vertical', 'panier siege', ''],
    [ 'PHFD-041216-W.jpg', 'vertical', 'PHFD 041216 W', ''],
    [ 'PHFD-peintures_boite-W.jpg', 'vertical', 'PHFD peintures boite W', ''],
    [ 'P-PHFD-006-040623-W.jpg', 'horizontal', 'P PHFD 006 040623 W', ''],
    [ 'P-PHFD-012-040716-W.jpg', 'horizontal', 'P PHFD 012 040716 W', ''],
    [ 'P-PHFD-016-040716-W.jpg', 'vertical', 'P PHFD 016 040716 W', ''],
    [ 'P-PHFD-018-040716-W.jpg', 'vertical', 'P PHFD 018 040716 W', ''],
    [ 'P-PHFD-019-040723-W.jpg', 'vertical', 'P PHFD 019 040723 W', ''],
    [ 'P-PHFD-021-040723-W.jpg', 'horizontal', 'P PHFD 021 040723 W', ''],
    [ 'P-PHFD-022_1-040723-W.jpg', 'horizontal', 'P PHFD 022 1 040723 W', ''],
    [ 'P-PHFD-023-040806-W.jpg', 'vertical', 'P PHFD 023 040806 W', ''],
    [ 'P-PHFD-026-040806-W.jpg', 'vertical', 'P PHFD 026 040806 W', ''],
    [ 'P-PHFD-036-040818-W.jpg', 'vertical', 'P PHFD 036 040818 W', ''],
    [ 'P-PHFD-038-040830-W.jpg', 'vertical', 'P PHFD 038 040830 W', ''],
    [ 'P-PHFD-039-040830-W.jpg', 'horizontal', 'P PHFD 039 040830 W', ''],
    [ 'P-PHFD-046-041007-W.jpg', 'vertical', 'P PHFD 046 041007 W', ''],
    [ 'P-PHFD-047-041021-W.jpg', 'vertical', 'P PHFD 047 041021 W', ''],
    [ 'P-PHFD-049-041029-W.jpg', 'horizontal', 'P PHFD 049 041029 W', ''],
    [ 'P-PHFD-050-041109-W.jpg', 'horizontal', 'P PHFD 050 041109 W', ''],
    [ 'P-PHFD-052-041118-W.jpg', 'vertical', 'P PHFD 052 041118 W', ''],
    [ 'P-PHFD-055-050106-W.jpg', 'vertical', 'P PHFD 055 050106 W', ''],
    [ 'P-PHFD-063-050520-W.jpg', 'vertical', 'P PHFD 063 050520 W', ''],
    [ 'P-PHFD-065-050615-W.jpg', 'horizontal', 'P PHFD 065 050615 W', ''],
    [ 'P-PHFD-073-050912-W.jpg', 'vertical', 'P PHFD 073 050912 W', ''],
    [ 'P-PHFD-075-050912-W.jpg', 'horizontal', 'P PHFD 075 050912 W', ''],
    [ 'P-PHFD-076-050912-W.jpg', 'vertical', 'P PHFD 076 050912 W', ''],
    [ 'P-PHFD-077-051010-W.jpg', 'vertical', 'P PHFD 077 051010 W', ''],
    [ 'P-PHFD-081-051115-W.jpg', 'vertical', 'P PHFD 081 051115 W', '']    
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Paris Halle aux farines - Visiteur</h2>
                <p><em>Voir également la réalisation associée :  <a href="<?= RACINE_SITE ?>paris-halle-aux-farines-surface-vivante.php">Paris Halle aux farines - Surface vivante</a></em></p>
                <h3>Commande</h3>
                    <p>Dessins, suivi de chantier de la Halle aux farines.<br>
                    2002 - 2006<br>
                    Nicolas Michelin, quand je lui montre le travail de dessins d'analyse urbaine, me propose de dessiner sur le chantier de la halle aux farines. Je travaille alors depuis deux ans sur le projet surface vivante.<br>
                    Je m'y rends 35 fois. Les comptes rendus de ces séances sont rassemblés dans une édition personnelle qui a été exposée lors de l'exposition ANMA à la galerie d'architecture, et au même endroit un an plus tôt, avec des peintures, à l'occasion de mon exposition personnelle.<br>
                    Un livre est édité par l'agence ANMA qui raconte "l'aventure" de ce chantier. Quelques-uns de ces dessins illustrent ce livre.<br><br>             
                    objet : Suivi de chantier<br>
                    maître d'oeuvre : Nicolas MICHELIN, ANMA<br>
                    période : 2003 - 2005<br>
                    fonds : 1000 dessins - 40 textes - 50 peintures</p>

                <h3>Carnets</h3>
                    <p>Les dessins sont répartis dans 15 carnets. Ci-contre une sélection de 49 parmis plusieurs centaines. <br />
                    Les peintures au format 18x24 cm, réalisées sur du bois ou du carto, sont rangées dans une boîte. Ci-contre une sélection de 30 de ces peintures.<br />
                    <a href="fichiers/PHFD-book-060415-35.pdf" target="_blank">La documentation complète</a>
                    </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
