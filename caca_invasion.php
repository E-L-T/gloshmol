<?php
require_once('inc/init.inc.php');
$page= 'caca invasion';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'caca_invasion-preche-LZ191008-w.jpg', 'vertical', 'Prédicateur', ''],
    [ 'caca_invasion-livret-191017-08-w.jpg', 'horizontal', 'robot', ''],
    [ 'caca_invasion-livret-191017-03-w.jpg', 'horizontal', 'chapeau', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>"Tremblez tremblez !<br />C'est l'invasion du caca!"</h2>
                <p>Livret 44 pages, 18x24 cm, peintures ech. 1, imprimé / façonné à l'atelier, Aubervilliers 2019 <br /><br />15 € + fdp (sans la mouche)</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
