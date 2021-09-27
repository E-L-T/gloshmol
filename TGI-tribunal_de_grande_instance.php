<?php
require_once('inc/init.inc.php');
$page= 'TGI, tribunal de grande instance';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'TGI-dessins_livrets-191017-w.jpg', 'horizontal', "3 livrets", ''],
    [ 'TGI-dessins_livrets-191017-29-w.jpg', 'horizontal', ''],
    [ 'TGI-dessins_livrets-191017-20-w.jpg', 'horizontal', '']
]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>TGI, tribunal de grande instance. Dessins d'audience.</h2>
                <p>J'ai commencé à aller dessiner au TGI quand j'étais étudiant et j'ai continué en y emmenant des étudiants.<br />Livrets I, II et III; 32, 32 et 40 pages, 18x24 cm, imprimés façonnés à l'atelier, Aubervilliers 2018<br />30 € les 3 + fdp </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
