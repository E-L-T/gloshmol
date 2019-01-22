<?php
require_once('inc/init.inc.php');
$page= 'Ville en vues';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'GZ-arbre_bite-w.jpg', 'vertical', 'Arbre bite', 'aquarelle sur arches, 18x24 cm'],
    [ 'GVV-060226-MQ2-w.jpg', 'horizontal', 'Arbre bite', 'maquette, bois et acier, 18x24'],
    [ 'GVV-060226-MQ2-2.jpg', 'vertical', 'Arbre bite', 'maquette, bois et acier, 18x24'],
    [ 'GVV-arbre_bite-060520.jpg', 'horizontal', 'Arbre bite', 'acier, peinture époxy haut 3m.'],
    [ 'GVV-coiffe.gif', 'vertical', 'Coiffe gonesienne', 'production graphique et performance']

];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Gonesse - Ville en vues</h2>
                    <h3>Expositions collectives</h3>
                        <p>Sixième Biennale d’art contemporain, ville de Gonesse<br>
                          Ville en vues, parcours d’art contemporain dans la ville<br>
                          Exposition du 15 mai au 15 juillet 2006<br>
                          Commissariat	Dominique Marchès et Claire Bresson
                        </p>
                    <h3>La coiffe gonesienne</h3>
                      <p>Une loi vient de passer obligeant toute personne sachant marcher à porter une coiffe homologuée. Il s’agit dans la partie inférieure d’un chapeau classique, hormis la lampe rouge qui le surmonte et qui permet aux avions de voir la nuit ou dans le brouillard que sous eux des gens vivent.<br>
                      Cette coiffe se décline dans une gamme de modèles divers, allant de la casquette au casque à cornes en passant pas la kipa.<br>
                      Ce chapeau a une vocation homéopathique en produisant les mêmes effets de ciel épais qu’un couloir aérien.<br>
                      Le parasitage est une forme de symbiose « fusion plus ou moins intime de deux êtres vivants d’espèces différentes » (Wikipedia)</p>

                      <p>Selon la biologiste Lynn Margulis, célèbre pour son travail sur l’endosymbiose, la symbiose est un facteur clé de l’évolution des espèces.<br>
                      Elle considère que la théorie darwinienne, axée sur la compétition, est incomplète, et affirme qu’au contraire, l’évolution est orientée par des phénomènes de coopération, d‘interaction et de dépendance mutuelle entre organismes vivants. <br>
                      Il s’agit ici d’une ectosymbiose, le symbiote vivant à la surface de l’hôte.
                      Physiquement, cette symbiose se traduit par le fleurissement de lampes rouges sur les pylônes électriques, clochers et points d’altitude élevée. (D’après Wikipédia)</p>

                      <p>Cette proposition intègre le plan de prévention situationnelle menée par les services de sécurité municipale.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
