<?php
require_once('inc/init.inc.php');
$page= 'achat';
require_once('inc/haut.inc.php');
$realisations_active = '';
$achat_active = 'active';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'Surface_vivante-201209-pastilles+livret-w.jpg', 'horizontal', "Pastilles béton, diamètre 42 cm, 18 kg, signée au dos, 2009, 200 €. Livret surface vivante, 15 €", ''],
    [ 'tabouret-meuble-200828-w.jpg', 'horizontal', "Tabourets et galettes, contreplaqué vernis tampon, Aubervilliers 2020, 60 €", ''],
    [ 'allumettes-livret-w.jpg', 'horizontal', "allumettes, livret 60 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020, 15 € + fdp", '']

]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>achat</h2>
                <p>Pour toute commande (livret, dessin, peinture...) merci de m'adresser un mail. Le paiement peut s'effectuer par virement, paylib, sumup.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
