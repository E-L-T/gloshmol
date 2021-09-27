<?php
require_once('inc/init.inc.php');
$page= 'Oped';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');	

$images = [
    ['OPED-1-110523-caddie_OPED.jpg', 'vertical', 'Caddie', ''],
    ['OPED-2-cartouche.jpg', '', 'Cartouche', ''],
    ['OPED-3-croix.jpg', 'vertical', 'Croix', 'Installation'],
    ['OPED-4-maquette dilatation.jpg', '', 'Dilatation', ''],
    ['OPED-5-depression.gif', 'vertical', 'Dépression', ''],
    ['OPED-6-ter.jpg', '', 'Colportage Roissy terminal 1', ''],
    ['OPED-7-colportages-OPED-01-Callot.jpg', '', 'Exposition, galerie Callot, Paris 2001', ''],
    ['OPED-8-+10ans-Gabriel.jpg', '', 'Exposition, galerie Callot, Paris 2011', ''],
    ['OPED-9-col_OPED-pdtokyo-4.jpg', '', 'Performance Palais de Tokyo, 2002', '']
];

?>
            <div id ="mediasRealisation">
<?php
    AffichageImages($images);
?>
            </div>
            <div id ="presentationRealisation">
                <h2>Oped</h2>
                <p>Diplôme d'architecture<br />
                2001<br />
                Ecole d'architecture Paris Malaquais<br />
                Félicitations du jury : Djamel Klouche, Jean Attali, Finn Geipel<br />
                Diplôme d'urbanisme théorique<br />
                Site : au bord des piste de l'aéroport de Roissy<br />
                Colportage<br />
                Exposé à Shanghai et Berlin dans le cadre de "Architectures émergentes" et sous forme performative au Palais de Tokyo<br />
               </p>
            </div>
        </section>
    </div>          
<?php
require_once('inc/footer.realisation.inc.php');	
?>
