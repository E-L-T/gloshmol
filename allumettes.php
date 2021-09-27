<?php
require_once('inc/init.inc.php');
$page= 'allumettes';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'allumettes-200911-collection-5_valises-w.jpg', 'horizontal', "5 valises de boîtes d'allumettes", ''],
    [ 'allumettes-boites+--w.jpg', 'horizontal', '+ ou -', ''],
    [ 'allumettes-livret-w.jpg', 'horizontal', 'une boîte des livrets', '']
]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>allumettes</h2>
                <p>En 1996, l’été, je dois aller chercher du travail. J'ai des boîtes d'allumettes que je fabrique et hier j'ai trouvé à la poubelle un attaché-case. Je mets les boîtes dans la valise et pars frapper à la porte des agences d'architecture.<br />En 2020 je réactive mes archives, c'est avec mes allumettes que je commence.<br /><br />Livret 60 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020<br />15 € + fdp </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
