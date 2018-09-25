<?php
require_once('inc/init.inc.php');
$page= 'Bertrand Segers';
require_once('inc/haut.inc.php');
$realisations_active = '';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');	

?>

            <div id ="identificationContenu">
                <h2>Mentions légales</h2>
                <p>Directeur de la publication: Bertrand Segers<br />
                Contact: bs@gloshmol.com<br />
                &copy;Bertrand Segers - <?php echo date('Y'); ?> - Tous droits réservés.<br />
                L'ensemble de ce site relève des législations françaises et internationales sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents iconographiques et photographiques.
                </p>
            </div>
        </section>
    </div>
<?php
require_once('inc/footer.realisation.inc.php');	
?>