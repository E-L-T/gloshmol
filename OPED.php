<?php
require_once('inc/init.inc.php');
$page= 'OPED';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    ['OPED-1-110523-caddie_OPED.jpg', 'vertical', 'Caddie', ''],
    ['OPED-2-cartouche.jpg', 'horizontal', 'Cartouche', ''],
    ['OPED-3-croix.jpg', 'vertical', 'Croix', 'Installation'],
    ['OPED-4-maquette dilatation.jpg', 'horizontal', 'Dilatation', ''],
    ['OPED-5-depression.gif', 'vertical', 'Dépression', ''],
    ['OPED-6-ter.jpg', 'horizontal', 'Colportage Roissy terminal 1', ''],
    ['OPED-7-colportages-OPED-01-Callot.jpg', 'horizontal', 'Exposition, galerie Callot, Paris 2001', ''],
    ['OPED-8-+10ans-Gabriel.jpg', 'horizontal', 'Exposition, galerie Callot, Paris 2011', ''],
    ['OPED-9-col_OPED-pdtokyo-4.jpg', 'horizontal', 'Performance Palais de Tokyo, 2002', ''],
    ['OPED-edition-18x24-210903.gif', 'horizontal', 'édition 18x24 pour les 20 ans', '']
];

?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                    
            </div>

            

            <div id ="presentationRealisation">
                <h2>OPED objet plié en deux</h2>
                <p>Le mot "diplôme" vient du grec "diploma" que Larousse traduit par "objet plié en deux". Je choisis de faire un objet plié en deux pour mon diplôme. <br /><br />


                Diplôme d'architecture, 2001, Ecole d'architecture Paris Malaquais<br />

                <br />

                Félicitations du jury : Djamel Klouche, Jean Attali, Finn Geipel<br />              

                Site : au bord des piste de l'aéroport de Roissy<br />


                Exposé à Shanghai et Berlin dans le cadre de "Architectures émergentes" et sous forme d'une performance au Palais de Tokyo en 2002.<br /><br /><br />

                Edition de 64 pages, 18x24 cm, imprimé et façonné à l'atelier, Aubervilliers, 2021, 20 euros + fdp.<br />

               </p>
                
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
